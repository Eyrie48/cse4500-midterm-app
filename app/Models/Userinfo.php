<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userinfo extends Model
{
    protected $fillable = ['user_name','user_email', 'phone_number'];
    use HasFactory;
}
