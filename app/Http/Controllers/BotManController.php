<?php



namespace App\Http\Controllers;



use BotMan\BotMan\BotMan;

use Illuminate\Http\Request;

use BotMan\BotMan\Messages\Incoming\Answer;
use App\Http\Conversations\OnboardingConversation;




class BotManController extends Controller

{

    /**

     * Place your BotMan logic here.

     */

    public function handle()

    {

        $botman = app('botman');



        $botman->hears('{message}', function ($botman, $message) {



            if ($message == 'hi') {

                $this->startConversation($botman);
            } else {

                $botman->reply("write 'hi' to start conversation...");
            }
        });



        $botman->listen();
    }



    /**

     * Place your BotMan logic here.

     */
    public function startConversation($botman)
    {
        $botman->startConversation(new OnboardingConversation());
    }
}
