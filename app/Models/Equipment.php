<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $fillable = ['invoice','device_name', 'cpu', 'price', 'purchaseDate', 'ram', 'storage'];
    use HasFactory;
}
