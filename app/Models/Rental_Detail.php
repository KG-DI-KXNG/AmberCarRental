<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rental_Detail extends Model
{
    protected $table = 'vehicle_details';


    use HasFactory, SoftDeletes;
}
