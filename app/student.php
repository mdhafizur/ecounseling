<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class student extends  Authenticatable
{
    use Notifiable;

    protected $guard = 'student';

    protected $fillable = [
        'name', 'email', 'password', 'matric', 'faculty', 'department', 'year', 'nationality', 'contact',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
