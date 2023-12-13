<?php
use Controller\ProfessorController;

require('config.php');
require('vendor/autoload.php');

$controller = new Controller\ProfessorController();
$controller->remove();
