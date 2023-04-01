<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const GENDER_MAIE = 1;
    const GENDER_FEMAIE = 2;

    protected $table = 'users';
    protected $guarded = false;
//    protected $fillable = [
//        'name',
//        'email',
//        'password',
//    ];

    public static function getGenders()
    {
        return [
            self::GENDER_MAIE => 'Erkak',
            self::GENDER_FEMAIE => 'Ayol',
        ];
    }

//    public function getGenderTitleAtribute()
//    {
//        return self::getGenders()[$this->gender];
//    }

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
