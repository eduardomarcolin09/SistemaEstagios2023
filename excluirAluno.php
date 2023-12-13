<?php
use Controller\AlunoControlller;

require('config.php');
require('vendor/autoload.php');

$controller = new Controller\AlunoController();
$controller->remove();
