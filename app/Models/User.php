<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Vehicle_Detail;
use App\Models\Rental_Detail;
use App\Models\Payment;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable , SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'username',
        'roles',
        'plan_id',
        'address',
        'phone',
        'id_image',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'roles',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected function vehicleDetails()
    {
        return $this->hasMany(Vehicle_Detail::class,'user_id','id');
    }

    protected function rentalDetails()
    {
        return $this->hasMany(Rental_Detail::class,'user_id','id');
    }
    protected function payment()
    {
        return $this->hasMany(Payment::class,'user_id','id');
    }
}
