<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $fillable = [ 'id_color_size', 'created_a', 'updated_at','image'];
    protected $table='product_images';

    public function ProductColorSize(){
        return $this->belongsTo(ProductColorSize::class,'id_color_size');
    }
}
