<?php

define('ROOT_PATH', realpath(dirname(__FILE__) . '/..'));


include '../app/core/db_connection.php';
require_once '../app/config.php';
require_once '../app/core/Controller.php';
require_once '../app/core/App.php';
//require_once '../app/controllers/HomeController.php';

$app = new App();
