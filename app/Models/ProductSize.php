<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'product_id', 'size', 'created_at', 'updated_at' ];
    protected $table='product_size';

    public function Product(){
        return $this->belongsTo(Product::class,'product_id');
    }

    public function ProductSize(){
        return $this->hasMany(ProductColorSize::class);
    }
}
