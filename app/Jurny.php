<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurny extends Model
{
    protected $table="Jurnys";

    protected $fillable = [

        'from','to','date','break','arrival_time','driver_name','price'

   ];
   public $timestamps=false;


// Begin Relation One to One with Booking  table .......

public function booking(){
    return $this->belongsTo('App\Booking','booking_id');

}
}
