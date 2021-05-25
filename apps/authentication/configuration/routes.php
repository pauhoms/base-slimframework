<?php

use Slim\App;
use Slim\Routing\RouteCollectorProxy;

return function (App $app) {
    $app->group('/api/Authentication', function (RouteCollectorProxy $group) {
        $group->get('/health-check', 'App\Authentication\Controllers\HealthCheck');
    });
};
