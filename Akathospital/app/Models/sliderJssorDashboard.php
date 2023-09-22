<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sliderJssorDashboard extends Model
{
    use HasFactory;

    protected $fillable = [
        'sdjs_name',
        'sdjs_image'
    ];
}
