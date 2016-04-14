<?php

use Phalcon\Mvc\Micro;

$app = new Micro();
$app->get('/', function () {
    echo "<h1>Hello World!</h1>";
});

$app->handle();
