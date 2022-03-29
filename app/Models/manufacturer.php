<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hardwares;

class Manufacturer extends Model
{
    //'manufacturer_id'
    protected $fillable = ['sales_name', 'sales_email', 'tech_name', 'tech_email', 'company_name'];
    use HasFactory;

    public function hardwares()
    {
        return $this->hasMany(Hardwares::class);
    }
}
