<?php

require 'vendor/autoload.php';

$app = new App();

//making the grid
$layout = $app->add('Columns');

$c1 = $layout->addColumn(3);
$c2 = $layout->addColumn(8);
$c3 = $layout->addColumn(5);

//Create Menu and add Items
//$m = $app->add(['Menu']);
//css class vertical- make menu vertical
//css class fluid - make menu fit the size of the column
//['register']-link to page register
$m = $c1->add(['Menu','vertical fluid']);
$m->addItem('New User Register', ['register']);
$m->addItem('User Log-in', ['login']);
$m->addITem('admin',['admin']);

$c2->add(['Image', 'images/front-image.jpeg']); 
//Application functionalities message
$c3->add(['Message', 'About mmoney lending App', 'Info'])
    ->text->addParagraph('Money Lending App is for  situations when you nees to keep track'.
    ' of the money you have lent out to your friends.');

  