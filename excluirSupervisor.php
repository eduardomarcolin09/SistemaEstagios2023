<?php
use Controller\SupervisorController;

require('config.php');
require('vendor/autoload.php');

$controller = new Controller\SupervisorController();
$controller->remove();
