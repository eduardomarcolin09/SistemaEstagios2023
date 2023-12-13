<?php

namespace Controller;

use Embed\Http\Redirects;
use Model\CidadeModel;
use Model\VO\CidadeVO;


final class CidadeController extends Controller {
    public function list() {
        $model  = new CidadeModel();
        $data = $model->selectAll();

        $this->loadView('listaCidades', [
            'cidades' => $data
        ]);
    }

    public function get() {
        $id = $_GET['id'] ?? null; #>= php 8
        $id = (isset($_GET['id'])) ? $_GET['id'] : null; # < php 8

        if (empty($id)) {
            $vo = new CidadeVO();
        } else {
            $model = new CidadeModel();
            $vo = $model->selectOne(new CidadeVO($id));
        }

        $this->loadView('formCidade', ['cidade' => $vo]);
    }

    public function save() {
        $id = $_POST['id'];
        $vo = new CidadeVO(
            $_POST['id'],
            $_POST['nome']
        );
        $model = new CidadeModel();

        $return = empty($id) ? $model->insert($vo) : $model->update($vo);

        $this->redirect('cidades.php');
    }

    public function remove() {
        if (empty($_GET['id'])) die('Necessário passar o ID');

        $model = new CidadeModel();

        $return = $model->delete(new CidadeVO($_GET['id']));

        $this->redirect('cidades.php');
    }
}
