<?php

namespace Controller;

use Embed\Http\Redirects;
use Model\CursoModel;
use Model\VO\CursoVO;
use Model\ProfessorModel;


final class CursoController extends Controller {
    public function list() {
        $model  = new CursoModel();
        $data = $model->selectAll();

        $this->loadView('listaCursos', [
            'cursos' => $data
        ]);
    }

    public function get() {
        $id = $_GET['id'] ?? null; #>= php 8
        $id = (isset($_GET['id'])) ? $_GET['id'] : null; # < php 8

        if (empty($id)) {
            $vo = new CursoVO();
        } else {
            $model = new CursoModel();
            $vo = $model->selectOne(new CursoVO($id));
        }

        $model = new ProfessorModel();
        $coodenadores = $model->selectAll();
        
        $model = new ProfessorModel();
        $naoCoodenadores = $model->selectNaoCoordenadores();

        $this->loadView('formCurso', [
            'curso' => $vo,
            'coordenadores' => $coodenadores,
            'naoCoordenadores' => $naoCoodenadores
        ]);
    }

    public function save() {
        $id = $_POST['id'];
        $vo = new CursoVO(
            $_POST['id'],
            $_POST['nome'],
            $_POST['id_coordenador']
        );
        $model = new CursoModel();

        $return = empty($id) ? $model->insert($vo) : $model->update($vo);

        $this->redirect('cursos.php');
    }

    public function remove() {
        if (empty($_GET['id'])) die('Necessário passar o ID');

        $model = new CursoModel();

        $return = $model->delete(new CursoVO($_GET['id']));

        $this->redirect('cursos.php');
    }
}
