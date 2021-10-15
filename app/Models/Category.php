<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Vehicle_Detail;

class Category extends Model
{
    protected $fillable = [
        'category_name',
    ];
    use HasFactory, SoftDeletes;

    protected function vehicleDetails()
    {
        return $this->hasMany(Vehicle_Detail::class,'category_id','id');
    }
}
