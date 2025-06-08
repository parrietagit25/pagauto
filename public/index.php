<?php
define('ROOT_PATH', realpath(__DIR__ . '/../'));

require_once ROOT_PATH . '/app/core/db_connection.php';
require_once ROOT_PATH . '/app/config.php';
require_once ROOT_PATH . '/app/core/Controller.php';
require_once ROOT_PATH . '/app/core/App.php';

$app = new App();
