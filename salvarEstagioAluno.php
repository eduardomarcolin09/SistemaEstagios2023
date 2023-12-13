<?php
use Controller\EstagioAlunoController;

require('config.php');
require('vendor/autoload.php');

$controller = new Controller\EstagioAlunoController();
$controller->save();