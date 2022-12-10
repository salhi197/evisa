<?php

namespace App;

use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;



class Police extends Authenticatable
{
    use Notifiable;
    /**
     * @var string
    */
    protected $guard = 'police';
    protected $table = 'polices';

    protected $fillable = [
        'name', 'email', 'password','password_text','solde'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];



}

