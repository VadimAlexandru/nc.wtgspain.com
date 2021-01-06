<?php
use App\Http\Controllers\BotManController;
use \BotMan\BotMan\BotMan;

/**
 * @var BotMan $bot
 */
$bot = resolve('botman');

//$bot->hears('Hi', function (BotMan $bot) {
//    $bot->reply(get_class($bot));
//});
//
//




$bot->hears('payload', function(BotMan $bot) {
    $bot->reply(
        json_encode($bot->getUser()->getInfo())
    );
});
















$bot->hears('Start conversation', BotManController::class.'@startConversation');
