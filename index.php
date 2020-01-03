<?php
session_start();

use Core\App;

require_once 'vendor/autoload.php';
require_once 'app/config.php';

$app = new App();
$app->run();
