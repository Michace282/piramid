<?php
namespace App\Http\Controllers;

use App\Models\Availability;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AvailabilityController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/cms/jaluji/availabilities",
     *     summary="Get all Availabilitys",
     *     tags={"Product Attributes"},
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Availability"))
     *     )
     * )
     */
    public function index()
    {
        $Availabilitys = Availability::all();
        return response()->json($Availabilitys);
    }

    /**
     * @OA\Post(
     *     path="/api/cms/jaluji/availabilities",
     *     summary="Create a new Availability",
     *     tags={"Product Attributes"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Availability")
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Availability")
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Validation error"
     *     )
     * )
     */
    public function store(Request $request)
    {
        $Availability = Availability::create($request->all());
        return response()->json($Availability, Response::HTTP_CREATED);
    }

    /**
     * @OA\Get(
     *     path="/api/cms/jaluji/availabilities/{id}",
     *     summary="Get Availability by ID",
     *     tags={"Product Attributes"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Availability")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Availability not found"
     *     )
     * )
     */
    public function show($id)
    {
        $Availability = Availability::findOrFail($id);
        return response()->json($Availability);
    }

    /**
     * @OA\Put(
     *     path="/api/cms/jaluji/availabilities/{id}",
     *     summary="Update Availability by ID",
     *     tags={"Product Attributes"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Availability")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Availability")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Availability not found"
     *     )
     * )
     */
    public function update(Request $request, $id)
    {
        $Availability = Availability::findOrFail($id);
        $Availability->update($request->all());
        return response()->json($Availability);
    }

    /**
     * @OA\Delete(
     *     path="/api/cms/jaluji/availabilities/{id}",
     *     summary="Delete Availability by ID",
     *     tags={"Product Attributes"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="Successful operation"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Availability not found"
     *     )
     * )
     */
    public function destroy($id)
    {
        $Availability = Availability::findOrFail($id);
        $Availability->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}