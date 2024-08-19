<?php
namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CollectionController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/cms/jaluji/collections",
     *     summary="Get all collections",
     *     tags={"Product Attributes"},
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Collection"))
     *     )
     * )
     */
    public function index()
    {
        $collections = Collection::all();
        return response()->json($collections);
    }

    /**
     * @OA\Post(
     *     path="/api/cms/jaluji/collections",
     *     summary="Create a new collection",
     *     tags={"Product Attributes"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Collection")
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Collection")
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Validation error"
     *     )
     * )
     */
    public function store(Request $request)
    {
        $collection = Collection::create($request->all());
        return response()->json($collection, Response::HTTP_CREATED);
    }

    /**
     * @OA\Get(
     *     path="/api/cms/jaluji/collections/{id}",
     *     summary="Get collection by ID",
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
     *         @OA\JsonContent(ref="#/components/schemas/Collection")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Collection not found"
     *     )
     * )
     */
    public function show($id)
    {
        $collection = Collection::findOrFail($id);
        return response()->json($collection);
    }

    /**
     * @OA\Put(
     *     path="/api/cms/jaluji/collections/{id}",
     *     summary="Update collection by ID",
     *     tags={"Product Attributes"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Collection")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Collection")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Collection not found"
     *     )
     * )
     */
    public function update(Request $request, $id)
    {
        $collection = Collection::findOrFail($id);
        $collection->update($request->all());
        return response()->json($collection);
    }

    /**
     * @OA\Delete(
     *     path="/api/cms/jaluji/collections/{id}",
     *     summary="Delete collection by ID",
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
     *         description="Collection not found"
     *     )
     * )
     */
    public function destroy($id)
    {
        $collection = Collection::findOrFail($id);
        $collection->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}