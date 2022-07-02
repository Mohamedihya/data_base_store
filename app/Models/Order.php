<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'user_id', 'status', 'payment_methd', 'payment_status', 'payment_id', 'total_price', 'adress', 'phone', 'emai', 'name', 'surname', 'city', 'postal_code', 'country', 'chipping_price', 'created_at', 'updated_at' ];
    protected $table="orders";
    public function User(){
           return $this->belongsTo(User::class,'user_id');
    }
    public function OrderDetail(){
        return $this->hasOne(OrderDetail::class);
 }

}
