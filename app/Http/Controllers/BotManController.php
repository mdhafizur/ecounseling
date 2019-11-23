<?php



namespace App\Http\Controllers;

use App\botAppointment;
use BotMan\BotMan\BotMan;

use Illuminate\Http\Request;

use BotMan\BotMan\Messages\Incoming\Answer;
use App\Http\Conversations\OnboardingConversation;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\BotMan\Middleware\Dialogflow;



class BotManController extends Controller

{

    /**

     * Place your BotMan logic here.

     */

    public function handle()

    {

        $botman = resolve('botman');

        $dialogflow = Dialogflow::create('ead53d300f5948b9869d6f7b4b35d4c9')->listenForAction();
        $botman->middleware->received($dialogflow);


        $botman->hears('appointment||input.welcome', function (BotMan $bot) {

            $extras = $bot->getMessage()->getExtras();
            $apiReply = $extras['apiReply'];
            $apiAction = $extras['apiAction'];
            $apiIntent = $extras['apiIntent'];
            $apiParameters = $extras['apiParameters'];

            $bot->reply($apiReply);

            if (strpos($apiReply, 'Okay see you') !== false) {
                $botAppointment = new botAppointment();
                $botAppointment->type = $apiParameters['AppointmentType'];
                $botAppointment->name = $apiParameters['name'];
                $botAppointment->email = $apiParameters['email'];
                $botAppointment->phone = $apiParameters['phone'];
                $botAppointment->date = $apiParameters['date'];
                $botAppointment->time = $apiParameters['time'];
                $botAppointment->save();
                // $bot->reply($apiParameters['AppointmentType']);
                // $bot->reply($apiParameters['name']);
                // $bot->reply($apiParameters['email']);
                // $bot->reply($apiParameters['phone']);
                // $bot->reply($apiParameters['date']);
                // $bot->reply($apiParameters['time']);
                // function save(Request $request)
                // {
                //     $botAppointment = new botAppointment();
                //     $botAppointment->name = $apiParameters['name'];
                //     $botAppointment->email = $request->input('email');
                //     $botAppointment->phone = $request->input('message');
                //     $botAppointment->date = $request->input('message');
                //     $botAppointment->time = $request->input('message');
                //     //save message
                //     botAppointment->save();
                // }
            }
        })->middleware($dialogflow);


        $botman->hears('Hello I am {name}', function ($botman, $name) {
            $botman->reply('Hi ' . $name . '!');
        });
        $botman->fallback(function ($bot) {
            $bot->reply('Sorry, I did not understand these commands. Here is a list of commands I understand: ...');
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
