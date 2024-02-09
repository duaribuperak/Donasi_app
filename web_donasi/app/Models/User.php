<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Donation;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // protected $fillable = [
    //     'nama',
    //     'username',
    //     'email',
    //     'password',
    // ];
    
    protected $guarded = ['id'];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    // mengambil data donasi dari user
    public function donations(){
        return $this->hasMany(Donation::class, 'user_id');
    }

    // mengambil data donasi dari orang lain
    public function donateds(){
        return $this->hasMany(Donation::class, 'to_user_id');
    }
    
}
