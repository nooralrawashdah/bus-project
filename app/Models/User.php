<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;    // مشان يعمل تأكد لايميل يوزر هو عندي
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Contracts\LaratrustUser;
use Laratrust\Traits\HasRolesAndPermissions;

class User extends Authenticatable implements MustVerifyEmail, LaratrustUser
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRolesAndPermissions;   // هون  استدعيت تبع انو يتحقق من  ايميل المستخدم

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    public function booking()
   {
    return $this->hasMany('booking'::class,'user_id'); // should be user_id
   }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
