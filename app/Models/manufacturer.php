<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $fillable = ['sales_name', 'sales_email', 'tech_name', 'tech email', 'company_name'];
    use HasFactory;
}
