<?php

/**
 * @var \Dbb\App $app
 */

/* Internals */
$app['config'] = include 'config.php';

/* Services */
$app['services.pingService'] = $app->share(
    function () {
        return new Dbb\Kernel\PingService();
    }
);

/* Controllers */
$app['controllers.indexController'] = $app->share(
    function () {
        return new Dbb\Controller\Index();
    }
);
