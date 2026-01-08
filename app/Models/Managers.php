<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Managers extends Model
{
    protected $fillable = [
        'expert_year',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}