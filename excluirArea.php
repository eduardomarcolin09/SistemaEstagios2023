<?php
use Controller\AreaControlller;

require('config.php');
require('vendor/autoload.php');

$controller = new Controller\AreaController();
$controller->remove();
