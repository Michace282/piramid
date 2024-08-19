<?php
namespace App\Http\Controllers;

use App\Models\ProductFilter;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductFilterController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/cms/jaluji/filters",
     *     summary="Get all ProductFilters",
     *     tags={"Product Filters"},
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/ProductFilter"))
     *     )
     * )
     */
    public function index()
    {
        $ProductFilters = ProductFilter::all();
        return response()->json($ProductFilters);
    }

    /**
     * @OA\Post(
     *     path="/api/cms/jaluji/filters",
     *     summary="Create a new ProductFilter",
     *     tags={"Product Filters"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/ProductFilter")
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/ProductFilter")
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Validation error"
     *     )
     * )
     */
    public function store(Request $request)
    {
        $ProductFilter = ProductFilter::create($request->all());
        return response()->json($ProductFilter, Response::HTTP_CREATED);
    }

    /**
     * @OA\Get(
     *     path="/api/cms/jaluji/filters/{product_id}",
     *     summary="Get ProductFilter by ID",
     *     tags={"Product Filters"},
     *     @OA\Parameter(
     *         name="product_id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/ProductFilter")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="ProductFilter not found"
     *     )
     * )
     */
    public function show($product_id)
    {
        $ProductFilter = ProductFilter::where('product_id', $product_id)->all();
        return response()->json($ProductFilter);
    }

    /**
     * @OA\Put(
     *     path="/api/cms/jaluji/filters/{id}",
     *     summary="Update ProductFilter by product id",
     *     tags={"Product Filters"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/ProductFilter")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/ProductFilter")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="ProductFilter not found"
     *     )
     * )
     */
    public function update(Request $request, $product_id)
    {
        $ProductFilter = ProductFilter::findOrFail($id);
        $ProductFilter->update($request->all());
        return response()->json($ProductFilter);
    }

    /**
     * @OA\Delete(
     *     path="/api/cms/jaluji/filters/{id}",
     *     summary="Delete ProductFilter by ID",
     *     tags={"Product Filters"},
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
     *         description="ProductFilter not found"
     *     )
     * )
     */
    public function destroy($id)
    {
        $ProductFilter = ProductFilter::findOrFail($id);
        $ProductFilter->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}