<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CounselorReview extends Model
{
    protected $fillable = [
        'review',
        'rating',
        'counselor_id'
    ];
}
