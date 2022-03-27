<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hardwares extends Model
{
    protected $fillable = ['invoice', 'device_name', 'cpu', 'price', 'purchaseDate', 'ram', 'storage'];
    use HasFactory;

    function userinfo()
    {
        return $this->hasMany(Userinfo::class);
    }
}
