<?php



$app = new App(true);
$app -> add(new Dashboard())->setModel(new Model\User($app->db));
