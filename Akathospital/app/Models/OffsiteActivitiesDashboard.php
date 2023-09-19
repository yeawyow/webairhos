<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OffsiteActivitiesDashboard extends Model
{
    use HasFactory;

    protected $fillable = [
        'osa_title',
        'osa_content',
        'osa_image',
        'osa_date'
    ];
}
