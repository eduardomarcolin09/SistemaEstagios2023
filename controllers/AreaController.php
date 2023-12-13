<?php

namespace Controller;

use Embed\Http\Redirects;
use Model\AreaModel;
use Model\VO\AreaVO;


final class AreaController extends Controller {
    public function list() {
        $model  = new AreaModel();
        $data = $model->selectAll();

        $this->loadView('listaAreas', [
            'areas' => $data
        ]);
    }

    public function get() {
        $id = $_GET['id'] ?? null; #>= php 8
        $id = (isset($_GET['id'])) ? $_GET['id'] : null; # < php 8

        if (empty($id)) {
            $vo = new AreaVO();
        } else {
            $model = new AreaModel();
            $vo = $model->selectOne(new AreaVO($id));
        }

        $this->loadView('formArea', ['area' => $vo]);
    }

    public function save() {
        $id = $_POST['id'];
        $vo = new AreaVO(
            $_POST['id'],
            $_POST['nome']
        );
        $model = new AreaModel();

        $return = empty($id) ? $model->insert($vo) : $model->update($vo);

        $this->redirect('areas.php');
    }

    public function remove() {
        if (empty($_GET['id'])) die('Necessário passar o ID');

        $model = new AreaModel();

        $return = $model->delete(new AreaVO($_GET['id']));

        $this->redirect('areas.php');
    }
}
