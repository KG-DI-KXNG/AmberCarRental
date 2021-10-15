<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Rental_Detail;

class Vehicle_Detail extends Model
{
    protected $table = 'vehicle_details';

    use HasFactory,SoftDeletes;

    protected function rentalDetails()
    {
        return $this->hasMany(Rental_Detail::class,'vd_id','id');
    }
}
