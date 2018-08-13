<?php

require 'vendor/autoload.php';

$app = new App(true);

$app->add('CRUD')->setModel(new Model\User($app->db));
$app->add('CRUD')->setModel(new Model\Friend($app->db));
$app->add('CRUD')->setModel(new Model\Loan($app->db));
//$app->add('CRUD')->setModel(new Model\Repayment($app->db));


