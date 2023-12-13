<?php

namespace Controller;

use Embed\Http\Redirects;
use Model\ProfessorModel;
use Model\VO\ProfessorVO;
use Model\AreaModel;

final class ProfessorController extends Controller {
    public function list() {
        $model  = new ProfessorModel();
        $data = $model->selectAll();

        $this->loadView('listaProfessores', [
            'professores' => $data
        ]);
    }

    public function get() {
        $id = $_GET['id'] ?? null; #>= php 8
        $id = (isset($_GET['id'])) ? $_GET['id'] : null; # < php 8

        if (empty($id)) {
            $vo = new ProfessorVO();
        } else {
            $model = new ProfessorModel();
            $vo = $model->selectOne(new ProfessorVO($id));
        }

        $model= new AreaModel();
        $areas = $model->selectAll();

        $this->loadView('formProfessor', [
            'professor' => $vo,
            'areas' => $areas
        ]);
    }

    public function save() {
        $id = $_POST['id'];
        $vo = new ProfessorVO(
            $_POST['id'],
            $_POST['nome'],
            $_POST['email'],
            $_POST['id_area']
        );
        $model = new ProfessorModel();

        $return = empty($id) ? $model->insert($vo) : $model->update($vo);

        $this->redirect('professores.php');
    }

    public function remove() {
        if (empty($_GET['id'])) die('Necessário passar o ID');

        $model = new ProfessorModel();

        $return = $model->delete(new ProfessorVO($_GET['id']));

        $this->redirect('professores.php');
    }
}
