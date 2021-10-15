<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penalty extends Model
{
    protected $fillable = [
        'rent_id',
        'payment_fee',
        'payment_status',
    ];

    use HasFactory, SoftDeletes;
}
