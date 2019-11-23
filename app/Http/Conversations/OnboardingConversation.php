<?php

namespace App\Http\Conversations;

use Validator;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;

class OnboardingConversation extends Conversation
{
    public function askName()
    {
        $this->ask('What is your name?', function (Answer $answer) {
            $this->bot->userStorage()->save([
                'name' => $answer->getText(),
            ]);

            $this->say('Nice to meet you ' . $answer->getText());
            $this->askService();
        });
    }
    public function askService()
    {
        $this->ask('What can i do for you?', function (Answer $answer) {
            if ($answer == 'i want to make an appointment' || 'make an appointment') {
                $this->ask('What service would you like?\n we provide Session Counseling, Career Counseling', function (Answer $answer) {
                    $this->bot->userStorage()->save([
                        'type' => $answer->getText(),
                    ]);
                });
            } else {
                $this->say('Enter Service ' . $answer->name);
            }
        });
    }
    public function askEmail()
    {
        $this->ask('What is your email?', function (Answer $answer) {

            $validator = Validator::make(['email' => $answer->getText()], [
                'email' => 'email',
            ]);

            if ($validator->fails()) {
                return $this->repeat('That doesn\'t look like a valid email. Please enter a valid email.');
            }

            $this->bot->userStorage()->save([
                'email' => $answer->getText(),
            ]);

            $this->askMobile();
        });
    }

    public function askMobile()
    {
        $this->ask('Great. What is your mobile number?', function (Answer $answer) {
            $this->bot->userStorage()->save([
                'mobile' => $answer->getText(),
            ]);

            $this->say('Great!');
        });
    }

    public function run()
    {
        $this->askName();
    }
}
