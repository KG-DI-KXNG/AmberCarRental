<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    protected $fillable = [
        'user_id',
        'rent_id',
        'payment_date',
    ];

    use HasFactory, SoftDeletes;
}
