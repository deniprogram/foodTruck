<?php
require_once '../../config/config.php';
require_once '../../lib/slim/vendor/slim/slim/Slim/Slim.php';
require_once 'CoreMobile.php';

\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();
$app->response()->header('Content-Type', 'application/json;charset=utf-8');
