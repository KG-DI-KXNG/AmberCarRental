<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\User;

class Plan extends Model
{
    protected $fillable = [
        'name',
        'price',
        'limit',
    ];

    use HasFactory, SoftDeletes;

    protected function users()
    {
        return $this->hasMany(User::class,'plan_id','id');
    }
}
