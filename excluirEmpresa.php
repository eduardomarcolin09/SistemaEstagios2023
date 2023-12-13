<?php
use Controller\EmpresaController;

require('config.php');
require('vendor/autoload.php');

$controller = new Controller\EmpresaController();
$controller->remove();
