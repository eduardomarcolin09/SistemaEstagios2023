<?php
use Controller\CidadeControlller;

require('config.php');
require('vendor/autoload.php');

$controller = new Controller\CidadeController();
$controller->remove();
