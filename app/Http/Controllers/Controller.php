<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(title="Platform API", version="0.1")
 * @OA\Components(
 *     @OA\Schema(
 *         schema="Product",
 *         type="object",
 *         required={"name", "description", "price", "category_id", "collection_id", "design_id", "transparency_id", "color_id", "discount_id", "availability_id"},
 *         @OA\Property(property="id", type="integer", example=1),
 *         @OA\Property(property="name", type="string", example="Product Name"),
 *         @OA\Property(property="description", type="string", example="Product Description"),
 *         @OA\Property(property="price", type="number", format="float", example=99.99),
 *         @OA\Property(property="category_id", type="integer", example=1),
 *         @OA\Property(property="collection_id", type="integer", example=1),
 *         @OA\Property(property="design_id", type="integer", example=1),
 *         @OA\Property(property="transparency_id", type="integer", example=1),
 *         @OA\Property(property="color_id", type="integer", example=1),
 *         @OA\Property(property="discount_id", type="integer", example=1),
 *         @OA\Property(property="availability_id", type="integer", example=1)
 *     ),
 *     @OA\Schema(
 *         schema="Category",
 *         type="object",
 *         required={"name"},
 *         @OA\Property(property="id", type="integer", example=1),
 *         @OA\Property(property="name", type="string", example="Category Name")
 *     ),
 *     @OA\Schema(
 *         schema="Collection",
 *         type="object",
 *         required={"name"},
 *         @OA\Property(property="collection_id", type="integer", example=1),
 *         @OA\Property(property="name", type="string", example="Collection Name")
 *     ),
 *     @OA\Schema(
 *         schema="Design",
 *         type="object",
 *         required={"name"},
 *         @OA\Property(property="id", type="integer", example=1),
 *         @OA\Property(property="name", type="string", example="Design Name")
 *     ),
 *     @OA\Schema(
 *         schema="Transparency",
 *         type="object",
 *         required={"name"},
 *         @OA\Property(property="id", type="integer", example=1),
 *         @OA\Property(property="name", type="string", example="Transparency Name")
 *     ),
 *     @OA\Schema(
 *         schema="Color",
 *         type="object",
 *         required={"name"},
 *         @OA\Property(property="id", type="integer", example=1),
 *         @OA\Property(property="name", type="string", example="Color Name")
 *     ),
 *     @OA\Schema(
 *         schema="Discount",
 *         type="object",
 *         required={"name", "discount_percentage"},
 *         @OA\Property(property="name", type="string", example="Discount Name"),
 *         @OA\Property(property="discount_percentage", type="number", format="float", example=20.0)
 *     ),
 *     @OA\Schema(
 *         schema="Availability",
 *         type="object",
 *         required={"name"},
 *         @OA\Property(property="id", type="integer", example=1),
 *         @OA\Property(property="name", type="string", example="Availability Name")
 *     ),
 *     @OA\Schema(
 *         schema="Info",
 *         type="object",
 *         required={"name", "description"},
 *         @OA\Property(property="id", type="integer", example=1),
 *         @OA\Property(property="name", type="string", example="Info Name"),
 *         @OA\Property(property="description", type="string", example="Info Description")
 *     ),
 *     @OA\Schema(
 *         schema="ProductImage",
 *         type="object",
 *         required={"product_id", "image_url"},
 *         @OA\Property(property="id", type="integer", example=1),
 *         @OA\Property(property="product_id", type="integer", example=1),
 *         @OA\Property(property="image_url", type="string", example="https://example.com/image.jpg")
 *     ),
 *     @OA\Schema(
 *         schema="ProductFilter",
 *         type="object",
 *         required={"product_id", "name_parameter", "positions_parameter"},
 *         @OA\Property(property="id", type="integer", example=1),
 *         @OA\Property(property="product_id", type="integer", example=1),
 *         @OA\Property(property="name_parameter", type="string", example="Color Name"),
 *         @OA\Property(property="positions_parameter", type="string", example="Color Position")
 *     )
 * )
 */

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
