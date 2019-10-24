<?php

use app\Http\Controllers\BotManController;

$botman = resolve('botman');
$botman->hears('.*(Hi|Hello).*', BotManController::class . '@startConversation');
