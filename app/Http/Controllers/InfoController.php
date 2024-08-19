<?php
namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class InfoController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/cms/jaluji/infos",
     *     summary="Get all Infos",
     *     tags={"Product Attributes"},
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Info"))
     *     )
     * )
     */
    public function index()
    {
        $Infos = Info::all();
        return response()->json($Infos);
    }

    /**
     * @OA\Post(
     *     path="/api/cms/jaluji/infos",
     *     summary="Create a new Info",
     *     tags={"Product Attributes"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Info")
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Info")
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Validation error"
     *     )
     * )
     */
    public function store(Request $request)
    {
        $Info = Info::create($request->all());
        return response()->json($Info, Response::HTTP_CREATED);
    }

    /**
     * @OA\Get(
     *     path="/api/cms/jaluji/infos/{id}",
     *     summary="Get Info by ID",
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
     *         @OA\JsonContent(ref="#/components/schemas/Info")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Info not found"
     *     )
     * )
     */
    public function show($id)
    {
        $Info = Info::findOrFail($id);
        return response()->json($Info);
    }

    /**
     * @OA\Put(
     *     path="/api/cms/jaluji/infos/{id}",
     *     summary="Update Info by ID",
     *     tags={"Product Attributes"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Info")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Info")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Info not found"
     *     )
     * )
     */
    public function update(Request $request, $id)
    {
        $Info = Info::findOrFail($id);
        $Info->update($request->all());
        return response()->json($Info);
    }

    /**
     * @OA\Delete(
     *     path="/api/cms/jaluji/infos/{id}",
     *     summary="Delete Info by ID",
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
     *         description="Info not found"
     *     )
     * )
     */
    public function destroy($id)
    {
        $Info = Info::findOrFail($id);
        $Info->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}