<?php

require 'Slim/Slim.php';
require_once 'lib/mysql.php';
require_once 'lib/func.php';

$app = new Slim();

$app->get('/wines', 							'getWines');
$app->get('/wines/:id',						'getWine');
$app->get('/wines/search/:query', 'findByName');
$app->post('/wines', 							'addWine');
$app->put('/wines/:id', 					'updateWine');
$app->delete('/wines/:id',				'deleteWine');

$app->run();

?>
