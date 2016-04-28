<?php

$app->get('/ping', function () use ($app) {
        return $app['controllers.indexController']
            ->pingAction($app['services.pingService']);
});
