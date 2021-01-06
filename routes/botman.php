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


$keyboard = \BotMan\Drivers\Telegram\Extensions\Keyboard::create()->addRow(
    \BotMan\Drivers\Telegram\Extensions\KeyboardButton::create('test')
);



$bot->types();










$bot->hears('payload', function(BotMan $bot) {
    $bot->reply(
        $bot->getMessage()->getSender()
    );
});
















$bot->hears('Start conversation', BotManController::class.'@startConversation');
