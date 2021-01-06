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

use BotMan\Drivers\Telegram\Extensions\Keyboard;
use BotMan\Drivers\Telegram\Extensions\KeyboardButton;


$keyboard = Keyboard::create()->type( Keyboard::TYPE_KEYBOARD )
    ->oneTimeKeyboard(true)
    ->addRow(
        KeyboardButton::create("Да")->callbackData('first_inline'),
        KeyboardButton::create("Нет")->callbackData('second_inline')
    )
    ->toArray();






$bot->hears('/start', function(BotMan $bot) use ($keyboard) {
    $bot->reply('starting', $keyboard);
});








$bot->hears('payload', function(BotMan $bot) {
    $bot->reply(
        $bot->getMessage()->getSender()
    );
});
















$bot->hears('Start conversation', BotManController::class.'@startConversation');
