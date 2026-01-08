<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
   protected $table ='booking';
   protected $fillable =
   [
       'date',
       'user_id',
       'trip_id',
       '_bus_seat_id',

   ];

   public function user()
   {
    return $this->belongsTo('users'::class,'user_id');
   }
    public function trip()
    {
        return $this->belongsTo(Trip::class, 'trip_id');
    }
    public function bus_seat()
    {
        return $this->belongsTo(Bus_Seat::class, '_bus_seat_id');
    }
}
