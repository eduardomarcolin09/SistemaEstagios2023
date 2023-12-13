<?php
use Controller\CursoControlller;

require('config.php');
require('vendor/autoload.php');

$controller = new Controller\CursoController();
$controller->remove();
