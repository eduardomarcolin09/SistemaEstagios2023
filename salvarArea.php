<?php
use Controller\AreaController;

require('config.php');
require('vendor/autoload.php');

$controller = new Controller\AreaController();
$controller->save();