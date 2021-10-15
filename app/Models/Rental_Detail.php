<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Penalty;
use App\Models\Payment;

class   Rental_Detail extends Model
{
    protected $table = 'rental_details';


    use HasFactory, SoftDeletes;

    protected function penalty()
    {
        return $this->hasMany(Penalty::class,'rent_id','id');
    }

    protected function payment()
    {
        return $this->hasMany(Payment::class,'rent_id','id');
    }
}
