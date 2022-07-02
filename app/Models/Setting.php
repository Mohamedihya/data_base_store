<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name', 'description', 'phon', 'address', 'email', 'logo', 'favicon', 'facebook', 'twitter', 'instagram', 'youtub', 'tiktok', 'created_at', 'updated_at'];
     protected $table = "settings";
}
