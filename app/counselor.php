<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Musonza\Chat\Traits\Messageable;

class Counselor extends  Authenticatable
{
    use Notifiable;
    use Messageable;

    protected $guard = 'counselor';
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'status', 'type', 'resume',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // public function reviews()
    // {
    //     return $this->hasMany(CounselorReview::class);
    // }
    // public function getStarRating()
    // {

    //     $starCountSum = $this->reviews()->sum('rating');
    //     $average = $starCountSum / $this->reviews()->count();

    //     return $average;
    // }
}
