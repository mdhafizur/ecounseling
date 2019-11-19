<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public function counselor()
    {
        return $this->belongsTo(User::class, 'counselor_id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
