<?php
namespace App\Http\Controllers;

use App\Models\Transparency;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TransparencyController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/cms/jaluji/transparencies",
     *     summary="Get all transparencies",
     *     tags={"Product Attributes"},
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Transparency"))
     *     )
     * )
     */
    public function index()
    {
        $transparencies = Transparency::all();
        return response()->json($transparencies);
    }

    /**
     * @OA\Post(
     *     path="/api/cms/jaluji/transparencies",
     *     summary="Create a new transparency",
     *     tags={"Product Attributes"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Transparency")
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Transparency")
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Validation error"
     *     )
     * )
     */
    public function store(Request $request)
    {
        $transparency = Transparency::create($request->all());
        return response()->json($transparency, Response::HTTP_CREATED);
    }

    /**
     * @OA\Get(
     *     path="/api/cms/jaluji/transparencies/{id}",
     *     summary="Get transparency by ID",
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
     *         @OA\JsonContent(ref="#/components/schemas/Transparency")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Transparency not found"
     *     )
     * )
     */
    public function show($id)
    {
        $transparency = Transparency::findOrFail($id);
        return response()->json($transparency);
    }

    /**
     * @OA\Put(
     *     path="/api/cms/jaluji/transparencies/{id}",
     *     summary="Update transparency by ID",
     *     tags={"Product Attributes"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Transparency")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Transparency")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Transparency not found"
     *     )
     * )
     */
    public function update(Request $request, $id)
    {
        $transparency = Transparency::findOrFail($id);
        $transparency->update($request->all());
        return response()->json($transparency);
    }

    /**
     * @OA\Delete(
     *     path="/api/cms/jaluji/transparencies/{id}",
     *     summary="Delete transparency by ID",
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
     *         description="Transparency not found"
     *     )
     * )
     */
    public function destroy($id)
    {
        $transparency = Transparency::findOrFail($id);
        $transparency->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}