<?php
use Controller\AlunoControlller;

require('config.php');
require('vendor/autoload.php');

$controller = new Controller\EstagioAlunoController();
$controller->remove();
