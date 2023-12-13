<?php
use Controller\CursoController;

require('config.php');
require('vendor/autoload.php');

$controller = new Controller\CursoController();
$controller->save();