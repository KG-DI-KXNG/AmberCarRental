<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Vehicle_Detail;

class Brand extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'brand_name',
    ];

    protected function vehicleDetails()
    {
        return $this->hasMany(Vehicle_Detail::class,'brand_id','id');
    }

}
