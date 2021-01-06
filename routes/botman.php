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


$bot->hears('location', function(BotMan $bot) {


    $msg = \BotMan\BotMan\Messages\Outgoing\OutgoingMessage::create('loc')
        ->withAttachment(new \BotMan\BotMan\Messages\Attachments\Location(61,61, [
            'custom_payload' => true
        ]));
    $bot->reply($msg);
});






$bot->hears('payload', function(BotMan $bot) {
    $bot->reply(
        $bot->getMessage()->getSender()
    );
});
















$bot->hears('Start conversation', BotManController::class.'@startConversation');
