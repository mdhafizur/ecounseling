<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Musonza\Chat\Traits\Messageable;

class counselor extends  Authenticatable
{
    use Notifiable;
    use Messageable;

    protected $guard = 'counselor';

    protected $fillable = [
        'name', 'email', 'password', 'status', 'type', 'resume',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
