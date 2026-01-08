<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusSeat extends Model
{
    protected $table = '_bus_seat'; // اسم الجدول
    protected $fillable =
     [
        'bus_id',
      'seat_id'
    ];

    // علاقات
    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }

    public function seat()
    {
        return $this->belongsTo(Seat::class);
    }
}
