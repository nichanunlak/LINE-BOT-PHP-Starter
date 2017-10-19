<?php
$access_token = 'GP39z3zYbeJR4E7JP0lenQ0MIbtosME8GqpySYskc9kC08TnUGuHAEwjvLfFBFc2NPKgUZTqw7/a7OXcU978eSnpIm+/ymGen+grtyyfWbeSwWBCgar4NoRipq4g+kXTQjYOfX8ZixnAj2tapZc5ygdB04t89/1O/w1cDnyilFU=;

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;