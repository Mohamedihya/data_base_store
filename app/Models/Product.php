<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'image', 'price', 'discount_price', 'category-id', 'deleted_at', 'created_at', 'updated_at'];
    protected $table='products';

    public function Category(){
        return $this->belongsTo(Category::class,'category-id');
    }

    public function ProductSize(){
        return $this->hasMany(ProductSize::class);
    }

    public function ProductColor(){
        return $this->hasMany(ProductColor::class);
    }
}
