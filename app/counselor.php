<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class counselor extends  Authenticatable
{
    use Notifiable;

    protected $guard = 'counselor';

    protected $fillable = [
        'name', 'email', 'password', 'type', 'resume',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
