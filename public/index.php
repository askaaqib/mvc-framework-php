<?php
/**
 * User: askaaqib
 */

require_once __DIR__ .'/../vendor/autoload.php';

use app\core\Application;

$app = new Application();

$app->router->get('/', function() {
    echo 'Hello world';
});

$app->router->get('/contact', function() {
    return 'Contact';
});

$app->run();