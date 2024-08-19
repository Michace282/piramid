<?php
namespace App\Http\Controllers;

use App\Models\Design;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DesignController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/cms/jaluji/designs",
     *     summary="Get all designs",
     *     tags={"Product Attributes"},
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Design"))
     *     )
     * )
     */
    public function index()
    {
        $designs = Design::all();
        return response()->json($designs);
    }

    /**
     * @OA\Post(
     *     path="/api/cms/jaluji/designs",
     *     summary="Create a new design",
     *     tags={"Product Attributes"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Design")
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Design")
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Validation error"
     *     )
     * )
     */
    public function store(Request $request)
    {
        $design = Design::create($request->all());
        return response()->json($design, Response::HTTP_CREATED);
    }

    /**
     * @OA\Get(
     *     path="/api/cms/jaluji/designs/{id}",
     *     summary="Get design by ID",
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
     *         @OA\JsonContent(ref="#/components/schemas/Design")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Design not found"
     *     )
     * )
     */
    public function show($id)
    {
        $design = Design::findOrFail($id);
        return response()->json($design);
    }

    /**
     * @OA\Put(
     *     path="/api/cms/jaluji/designs/{id}",
     *     summary="Update design by ID",
     *     tags={"Product Attributes"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Design")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Design")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Design not found"
     *     )
     * )
     */
    public function update(Request $request, $id)
    {
        $design = Design::findOrFail($id);
        $design->update($request->all());
        return response()->json($design);
    }

    /**
     * @OA\Delete(
     *     path="/api/cms/jaluji/designs/{id}",
     *     summary="Delete design by ID",
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
     *         description="Design not found"
     *     )
     * )
     */
    public function destroy($id)
    {
        $design = Design::findOrFail($id);
        $design->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}