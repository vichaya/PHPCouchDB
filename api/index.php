<?php
require '../vendor/autoload.php';
require_once('../src/Sag.php');

$app = new \Slim\Slim();

//Define a HTTP GET route
$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});

$app->get('/users','getUsers');
//$app->get('/updates','getUserUpdates');
//$app->get('/users/search/:query','getUserSearch');

$app->run();

function getUsers(){
$sag = new Sag('127.0.0.1', '5984');

// Select the database that holds our blog's data.
$sag->setDatabase('phptest');
	$allDocs = $sag->getAllDocs()->body;
	$totalData = $allDocs->total_rows;
	for($i=0;$i<$totalData;$i++){
		print_r(json_encode($sag->get($allDocs->rows[$i]->id)->body));
		echo '</br>';
	}
}