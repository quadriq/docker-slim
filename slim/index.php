<?php
require 'vendor/autoload.php';

$app = new \Slim\App();

$app->get('/', function () {
   print "API Version 1.0";
});

$app->get('/list', function () {
   print "some list here";
});

$app->get('/name/{name}', function ($request, $response, $args) {
   print $args['name'];
});

$app->run();
