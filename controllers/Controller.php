<?php

namespace Controller;

use Model\UsuarioModel;
use Model\VO\UsuarioVO;

abstract class Controller {
    public function __construct($obrigaLogin = true) {
        session_start();

        if ($obrigaLogin) {
            $model = new UsuarioModel();
            if (!$model->checkLogin()) $this->redirect('index.php');
        }
    }

    public function redirect($url) {
        header("location: $url");
    }

    public function loadView($view, $data = []) {
        extract($data);
        include("views/$view.php");
    }
}
