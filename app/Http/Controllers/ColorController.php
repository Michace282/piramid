<?php
namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ColorController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/cms/jaluji/colors",
     *     summary="Get all colors",
     *     tags={"Product Attributes"},
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Color"))
     *     )
     * )
     */
    public function index()
    {
        $colors = Color::all();
        return response()->json($colors);
    }

    /**
     * @OA\Post(
     *     path="/api/cms/jaluji/colors",
     *     summary="Create a new color",
     *     tags={"Product Attributes"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Color")
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Color")
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Validation error"
     *     )
     * )
     */
    public function store(Request $request)
    {
        $color = Color::create($request->all());
        return response()->json($color, Response::HTTP_CREATED);
    }

    /**
     * @OA\Get(
     *     path="/api/cms/jaluji/colors/{id}",
     *     summary="Get color by ID",
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
     *         @OA\JsonContent(ref="#/components/schemas/Color")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Color not found"
     *     )
     * )
     */
    public function show($id)
    {
        $color = Color::findOrFail($id);
        return response()->json($color);
    }

    /**
     * @OA\Put(
     *     path="/api/cms/jaluji/colors/{id}",
     *     summary="Update color by ID",
     *     tags={"Product Attributes"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Color")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Color")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Color not found"
     *     )
     * )
     */
    public function update(Request $request, $id)
    {
        $color = Color::findOrFail($id);
        $color->update($request->all());
        return response()->json($color);
    }

    /**
     * @OA\Delete(
     *     path="/api/cms/jaluji/colors/{id}",
     *     summary="Delete color by ID",
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
     *         description="Color not found"
     *     )
     * )
     */
    public function destroy($id)
    {
        $color = Color::findOrFail($id);
        $color->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}