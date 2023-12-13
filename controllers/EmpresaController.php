<?php

namespace Controller;

use Embed\Http\Redirects;
use Model\EmpresaModel;
use Model\VO\EmpresaVO;
use Model\CidadeModel;

final class EmpresaController extends Controller {
    public function list() {
        $model  = new EmpresaModel();
        $data = $model->selectAll();

        $this->loadView('listaEmpresas', [
            'empresas' => $data
        ]);
    }

    public function get() {
        $id = $_GET['id'] ?? null; #>= php 8
        $id = (isset($_GET['id'])) ? $_GET['id'] : null; # < php 8

        if (empty($id)) {
            $vo = new EmpresaVO();
        } else {
            $model = new EmpresaModel();
            $vo = $model->selectOne(new EmpresaVO($id));
        }

        $model  = new CidadeModel();
        $cidades = $model->selectAll();

        $this->loadView('formEmpresa', [
            'empresa' => $vo,
            'cidades' => $cidades
        ]);
    }

    public function save() {
        $id = $_POST['id'];
        $vo = new EmpresaVO(
            $_POST['id'],
            $_POST['nome'],
            $_POST['endereco'],
            $_POST['telefone'],
            $_POST['email'],
            $_POST['cnpj'],
            $_POST['id_cidade']
        );
        $model = new EmpresaModel();

        $return = empty($id) ? $model->insert($vo) : $model->update($vo);

        $this->redirect('empresas.php');
    }

    public function remove() {
        if (empty($_GET['id'])) die('Necessário passar o ID');

        $model = new EmpresaModel();

        $return = $model->delete(new EmpresaVO($_GET['id']));

        $this->redirect('empresas.php');
    }
}
