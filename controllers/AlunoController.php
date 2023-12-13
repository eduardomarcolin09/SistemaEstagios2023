<?php

namespace Controller;

use Embed\Http\Redirects;
use Model\AlunoModel;
use Model\VO\AlunoVO;
use Model\CursoModel;
use Model\CidadeModel;


final class AlunoController extends Controller {
    public function list() {
        $model  = new AlunoModel();
        $data = $model->selectAll();

        $this->loadView('listaAlunos', [
            'alunos' => $data
        ]);
    }

    public function get() {
        $id = $_GET['id'] ?? null; #>= php 8
        $id = (isset($_GET['id'])) ? $_GET['id'] : null; # < php 8

        if (empty($id)) {
            $vo = new AlunoVO();
        } else {
            $model = new AlunoModel();
            $vo = $model->selectOne(new AlunoVO($id));
        }

        $model  = new CursoModel();
        $cursos = $model->selectAll();
        
        $model  = new CidadeModel();
        $cidades = $model->selectAll();

        $this->loadView('formAluno', [
            'aluno' => $vo,
            'cursos' => $cursos,
            'cidades' => $cidades
        ]);
    }

    public function save() {
        $id = $_POST['id'];
        $vo = new AlunoVO(
            $_POST['id'],
            $_POST['matricula'],
            $_POST['nome'],
            $_POST['data_nascimento'],
            $_POST['email'],
            $_POST['cpf'],
            $_POST['rg'],
            $_POST['endereco'],
            $_POST['telefone'],
            $_POST['ano_turma'],
            $_POST['id_cidade'],
            $_POST['id_curso']
        );
        $model = new AlunoModel();

        $return = empty($id) ? $model->insert($vo) : $model->update($vo);

        $this->redirect('alunos.php');
    }

    public function remove() {
        if (empty($_GET['id'])) die('Necessário passar o ID');

        $model = new AlunoModel();

        $return = $model->delete(new AlunoVO($_GET['id']));

        $this->redirect('alunos.php');
    }
}
