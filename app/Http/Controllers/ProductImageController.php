<?php
namespace App\Http\Controllers;

use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductImageController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/cms/jaluji/images",
     *     summary="Get all ProductImages",
     *     tags={"Product Attributes"},
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/ProductImage"))
     *     )
     * )
     */
    public function index()
    {
        $ProductImages = ProductImage::all();
        return response()->json($ProductImages);
    }

    /**
     * @OA\Post(
     *     path="/api/cms/jaluji/images",
     *     summary="Create a new ProductImage",
     *     tags={"Product Attributes"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/ProductImage")
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/ProductImage")
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Validation error"
     *     )
     * )
     */
    public function store(Request $request)
    {
        $ProductImage = ProductImage::create($request->all());
        return response()->json($ProductImage, Response::HTTP_CREATED);
    }

    /**
     * @OA\Get(
     *     path="/api/cms/jaluji/images/{product_id}",
     *     summary="Get ProductImage by ID",
     *     tags={"Product Attributes"},
     *     @OA\Parameter(
     *         name="product_id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/ProductImage")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="ProductImage not found"
     *     )
     * )
     */
    public function show($product_id)
    {
        $ProductImage = ProductImage::where('product_id', $product_id)->all();
        return response()->json($ProductImage);
    }

    /**
     * @OA\Put(
     *     path="/api/cms/jaluji/images/{id}",
     *     summary="Update ProductImage by product id",
     *     tags={"Product Attributes"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/ProductImage")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/ProductImage")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="ProductImage not found"
     *     )
     * )
     */
    public function update(Request $request, $product_id)
    {
        $ProductImage = ProductImage::findOrFail($id);
        $ProductImage->update($request->all());
        return response()->json($ProductImage);
    }

    /**
     * @OA\Delete(
     *     path="/api/cms/jaluji/images/{id}",
     *     summary="Delete ProductImage by ID",
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
     *         description="ProductImage not found"
     *     )
     * )
     */
    public function destroy($id)
    {
        $ProductImage = ProductImage::findOrFail($id);
        $ProductImage->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}