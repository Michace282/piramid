<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductFilter extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'product_filters';


    protected $fillable = ['product_id', 'name_parameter', 'positions_parameter'];
}