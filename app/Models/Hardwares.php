<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Userinfo;
use App\Models\manufacturer;

class Hardwares extends Model
{
    protected $fillable = ['userinfo_id', 'manufacturer_id', 'invoice', 'device_name', 'cpu', 'price', 'purchaseDate', 'ram', 'storage', 'notes', 'service'];
    use HasFactory;

    function userinfo()
    {
        return $this->belongsTo(Userinfo::class);
    }

    public function manufacturer()
    {
        return $this->belongsTo(manufacturer::class);
    }
}
