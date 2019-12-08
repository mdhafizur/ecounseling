<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Musonza\Chat\Traits\Messageable;

class student extends  Authenticatable
{
    use Notifiable;
    use Messageable;

    protected $guard = 'student';

    protected $fillable = [
        'name', 'email', 'password', 'matric', 'faculty', 'department', 'year', 'nationality', 'contact',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
