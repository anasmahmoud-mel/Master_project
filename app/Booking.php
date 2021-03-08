<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [

        'booking_name', 'booking_email','booking_mobile','booking_passenger'

    ]; 


    // Begin Relation One to One with jurny table .......

    public function jurny(){
        return $this->hasOne('App\Jurny','booking_id');
    }
}
