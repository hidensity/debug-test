<?php

define('PROJECT_BASE_DIR', realpath('../'));
set_include_path(get_include_path() . PATH_SEPARATOR . PROJECT_BASE_DIR);

try {
    require 'vendor/autoload.php';

    $app = new Dbb\App();

    require 'config/di.php';
    require 'config/routing.php';

    $app->run();
} catch (\Exception $e) {
    //for debugging
    ini_set('display_errors', 1);
    throw $e;
}
