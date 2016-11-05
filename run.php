<?php

$content = file_get_contents("php://input");
$update = json_decode($content, true);

var_dump($update);die();

include __DIR__.'/vendor/autoload.php';

$app = new \Cilex\Application('Cilex');
$app->command(new \Cilex\Command\GreetCommand());
$app->run();
