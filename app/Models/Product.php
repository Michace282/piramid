<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'description', 'price', 'category_id', 'collection_id', 'design_id', 'transparency_id', 'color_id', 'discount_id', 'availability_id'];

    public function image()
    {
        return $this->belongsTo(Image::class, 'id', 'product_id');
    }

    public function filter()
    {
        return $this->belongsTo(Image::class, 'id', 'product_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function collection()
    {
        return $this->belongsTo(Collection::class, 'collection_id');
    }

    public function design()
    {
        return $this->belongsTo(Design::class, 'design_id');
    }

    public function transparency()
    {
        return $this->belongsTo(Transparency::class, 'transparency_id');
    }

    public function color()
    {
        return $this->belongsTo(Color::class, 'color_id');
    }

    public function discount()
    {
        return $this->belongsTo(Discount::class, 'discount_id');
    }

    public function availability()
    {
        return $this->belongsTo(Availability::class, 'color_id');
    }
}