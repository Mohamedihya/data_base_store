<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'id_orderd', 'id_color_size', 'quantity', 'price', 'discount', 'created_at', 'updated_at'];
    protected $table="orders_details";
    public function Order(){
        return $this->belongsTo(Order::class,'id_orderd');
        }
    public function ProductColorSize(){
    return $this->belongsTo(ProductColorSize::class,'id_color_size');
    }
}
