<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    protected $fillable = [
        'name',
        'price',
        'limit',
    ];

    use HasFactory, SoftDeletes;
}
