<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColorSize extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'id_color', 'id_siz', 'quantity', 'price_tow', 'discount', 'status', 'created_at', 'updated_at'];
    protected $table = 'product_size_color';

    public function ProductSize(){
        return $this->belongsTo(ProductSize::class,'id_siz');
    }
    public function ProductColor(){
        return $this->belongsTo(ProductColor::class,'id_color');
    }

    public function OrderDetail(){
        return $this->hasMany(OrderDetail::class);
    }

    public function ProductImage(){
        return $this->hasMany(ProductImage::class);
    }
}
