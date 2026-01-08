<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seates extends Model
 {  protected $table = '_seates';
      protected $fillable =      // هون الصفات الموجودة بالجدول
     [
        'Seat_number',
       
    ];





   public function buses()
{
    return $this->belongsToMany(Bus::class, 'bus_seat');
}
}
