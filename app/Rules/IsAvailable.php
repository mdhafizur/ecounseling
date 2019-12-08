<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Appointment;

class IsAvailable implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */

    protected $date;
    public function __construct($date)
    {
        //
        $this->date = $date;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return Appointment::where('counselor_id', $value)
            ->where('date', $this->date)
            ->doesntExist();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'counselor booked in that slot';
    }
}
