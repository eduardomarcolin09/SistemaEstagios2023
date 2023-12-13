<?php

namespace Controller;

use Model\UsuarioModel;
use Model\VO\UsuarioVO;

final class IndexController extends Controller {

    public function __construct(){
        parent::__construct(false);
    }

    public function list() {
        $model  = new UsuarioModel();
        $data = $model->selectAll();

        $this->loadView('index',);
    }

    public function get() {
        $id = $_GET['id'] ?? null; #>= php 8
        $id = (isset($_GET['id'])) ? $_GET['id'] : null; # < php 8

        if (empty($id)) {
            $vo = new UsuarioVO();
        } else {
            $model = new UsuarioModel();
            $vo = $model->selectOne(new UsuarioVO($id));
        }

        $this->loadView('telaIndex');
    }

}
