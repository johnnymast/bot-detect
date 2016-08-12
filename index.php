<?php
require 'vendor/autoload.php';
use Redbox\BScan\BScan;

$_SERVER['HTTP_USER_AGENT'] = 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)';
$isBot = (new BScan)->isBot();

