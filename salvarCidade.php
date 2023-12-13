<?php
use Controller\CidadeController;

require('config.php');
require('vendor/autoload.php');

$controller = new Controller\CidadeController();
$controller->save();