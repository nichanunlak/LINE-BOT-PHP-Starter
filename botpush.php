<?php

require "vendor/autoload.php"

$access_token   = 'GP39z3zYbeJR4E7JP0lenQ0MIbtosME8GqpySYskc9kC08TnUGuHAEwjvLfFBFc2NPKgUZTqw7/a7OXcU978eSnpIm+/ymGen+grtyyfWbeSwWBCgar4NoRipq4g+kXTQjYOfX8ZixnAj2tapZc5ygdB04t89/1O/w1cDnyilFU=';
$channelSecret  = 'fa1a209b57451d3f431e83f50d6b7333';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
/*$bot        = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response           = $bot->pushMessage('U1a1fd3e40d336d9df198654bf3cb3872', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();*/