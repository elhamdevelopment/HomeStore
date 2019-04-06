<?php

namespace HomeStore\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Model;

class Users extends Authenticatable implements  JWTSubject
{
    use Notifiable;


    protected $fillable = [
        'avatar','first_name','last_name','credit', 'gender',
        'email','password', 'mobile', 'last_login_date',
        'email_verified', 'is_active','role_id'
    ];


    protected $hidden = [
        'password', 'remember_token','email_verified'
    ];

    // Rest omitted for brevity

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

//    public function setPasswordAttribute($password)
//    {
//        if ( !empty($password) ) {
//            $this->attributes['password'] = bcrypt($password);
//        }
//    }
}
