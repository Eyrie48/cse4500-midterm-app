<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category_name','device_name', 'serial_num', 'price', 'ram', 'storage'];
    use HasFactory;
}
