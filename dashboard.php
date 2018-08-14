<?php

require 'vendor/autoload.php';

$app = new App();

//redirect user to login page if he tries to access dashboard without login
if (!$app->auth->user->loaded()){
    $app->redirect(['login']);
}

$msg = $app->add(['Message', 'The loan dashboard is not in use', 'info']);
$msg->add('Text')->set($app->auth->user['email']);

$app->add(['Button', 'logout'])->link(['logout']);
