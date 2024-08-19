<?php 
namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DiscountController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/cms/jaluji/discounts",
     *     summary="Get all discounts",
     *     tags={"Product Attributes"},
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Discount"))
     *     )
     * )
     */
    public function index()
    {
        $prices = Discount::all();
        return response()->json($prices);
    }

    /**
     * @OA\Post(
     *     path="/api/cms/jaluji/discounts",
     *     summary="Create a new discount",
     *     tags={"Product Attributes"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Discount")
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Discount")
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Validation error"
     *     )
     * )
     */
    public function store(Request $request)
    {
        $price = Discount::create($request->all());
        return response()->json($price, Response::HTTP_CREATED);
    }

    /**
     * @OA\Get(
     *     path="/api/cms/jaluji/discounts/{id}",
     *     summary="Get discount by ID",
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
     *         @OA\JsonContent(ref="#/components/schemas/Discount")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Discount not found"
     *     )
     * )
     */
    public function show($id)
    {
        $price = Discount::findOrFail($id);
        return response()->json($price);
    }

    /**
     * @OA\Put(
     *     path="/api/cms/jaluji/discounts/{id}",
     *     summary="Update discount by ID",
     *     tags={"Product Attributes"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Discount")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Discount")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Discount not found"
     *     )
     * )
     */
    public function update(Request $request, $id)
    {
        $price = Discount::findOrFail($id);
        $price->update($request->all());
        return response()->json($price);
    }

    /**
     * @OA\Delete(
     *     path="/api/cms/jaluji/discounts/{id}",
     *     summary="Delete discount by ID",
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
     *         description="Price not found"
     *     )
     * )
     */
    public function destroy($id)
    {
        $price = Discount::findOrFail($id);
        $price->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}