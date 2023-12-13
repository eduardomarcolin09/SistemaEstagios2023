<?php

namespace Controller;

use Embed\Http\Redirects;
use Model\SupervisorModel;
use Model\VO\SupervisorVO;
use Model\EmpresaModel;


final class SupervisorController extends Controller {
    public function list() {
        $model  = new SupervisorModel();
        $data = $model->selectAll();

        $this->loadView('listaSupervisores', [
            'supervisores' => $data
        ]);
    }

    public function get() {
        $id = $_GET['id'] ?? null; #>= php 8
        $id = (isset($_GET['id'])) ? $_GET['id'] : null; # < php 8

        if (empty($id)) {
            $vo = new SupervisorVO();
        } else {
            $model = new SupervisorModel();
            $vo = $model->selectOne(new SupervisorVO($id));
        }

        $model = new EmpresaModel();
        $empresas = $model->selectAll();

        $this->loadView('formSupervisor', [
            'supervisor' => $vo,
            'empresas' => $empresas
        ]);
    }

    public function save() {
        $id = $_POST['id'];
        $vo = new SupervisorVO(
            $_POST['id'],
            $_POST['nome'],
            $_POST['telefone'],
            $_POST['email'],
            $_POST['id_empresa'],
            $_POST['cargo']
        );
        $model = new SupervisorModel();

        $return = empty($id) ? $model->insert($vo) : $model->update($vo);

        $this->redirect('supervisores.php');
    }

    public function remove() {
        if (empty($_GET['id'])) die('Necessário passar o ID');

        $model = new SupervisorModel();

        $return = $model->delete(new SupervisorVO($_GET['id']));

        $this->redirect('supervisores.php');
    }
}
