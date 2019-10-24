<?php

use BotMan\BotMan\Messages\Conversations\Conversation;

class OnboardingCoversation extends Conversation
{
    public $firstName;

    public function askFirstName()
    {
        $this->ask("Hi! What is your name? ", function ($answer) {
            $firstName - $answer->getText();
            $this->say('nice to meet you' . $firstName);
        });
    }
    public function run()
    {
        $this->askFirstName();
    }
}
