<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'id_user', 'address', 'city', 'state', 'country', 'postal_code', 'phone', 'email', 'name', 'surname', 'created_at', 'updated_at', 'deleted_at'];
    protected $table = 'user_addresses';


    public function User(){
        return $this->belongsTo(User::class,'id_user');
    }
}
