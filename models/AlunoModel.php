<?php

namespace Model;

use Model\VO\AlunoVO;
use Util\Database;

final class AlunoModel extends Model {
    public function selectAll($vo = null) {
        $db = new Database();
        $data = $db->select('SELECT 
                                aluno.id,
                                aluno.matricula,
                                aluno.nome, 
                                aluno.datanasc,
                                aluno.email,
                                aluno.cpf,
                                aluno.rg, 
                                aluno.endereco,
                                aluno.telefone,
                                aluno.ano_turma,
                                aluno.id_cidade,
                                aluno.id_curso,
                                curso.nome as nome_curso,
                                cidade.nome as nome_cidade
                                FROM aluno
                                JOIN curso
                                ON aluno.id_curso = curso.id
                                JOIN cidade
                                ON aluno.id_cidade = cidade.id
                                ');

        $array = [];

        foreach ($data as $row) {
            $vo = new AlunoVO(
                $row['id'],
                $row['matricula'],
                $row['nome'],
                $row['datanasc'],
                $row['email'],
                $row['cpf'],
                $row['rg'],
                $row['endereco'],
                $row['telefone'],
                $row['ano_turma'],
                $row['id_cidade'],
                $row['id_curso'],
                $row['nome_curso'],
                $row['nome_cidade']
            );
            array_push($array, $vo);
        }

        return $array;
    }
    public function selectOne($vo = null) {
        $db = new Database();
        $query = 'SELECT * FROM aluno WHERE id = :id';
        $binds = [':id' => $vo->getId()];
        $data = $db->select($query, $binds);

        if (count($data) === 0) return null;

        return new AlunoVO(
            $data[0]['id'],
            $data[0]['matricula'],
            $data[0]['nome'],
            $data[0]['datanasc'],
            $data[0]['email'],
            $data[0]['cpf'],
            $data[0]['rg'],
            $data[0]['endereco'],
            $data[0]['telefone'],
            $data[0]['ano_turma'],
            $data[0]['id_cidade'],
            $data[0]['id_curso']
        );
    }

    public function selectSemEstagio($vo = null) {
        $db = new Database();
        $data = $db->select('SELECT 
        aluno.id,
        aluno.matricula,
        aluno.nome, 
        aluno.datanasc,
        aluno.email,
        aluno.cpf,
        aluno.rg, 
        aluno.endereco,
        aluno.telefone,
        aluno.ano_turma,
        aluno.id_cidade,
        aluno.id_curso,
        curso.nome as nome_curso,
        cidade.nome as nome_cidade
        FROM aluno
        JOIN curso
        ON aluno.id_curso = curso.id
        JOIN cidade
        ON aluno.id_cidade = cidade.id
        WHERE aluno.id not in(select id_aluno from estagio_aluno)
                                ');

        $array = [];

        foreach ($data as $row) {
            $vo = new AlunoVO(
                $row['id'],
                $row['matricula'],
                $row['nome'],
                $row['datanasc'],
                $row['email'],
                $row['cpf'],
                $row['rg'],
                $row['endereco'],
                $row['telefone'],
                $row['ano_turma'],
                $row['id_cidade'],
                $row['id_curso'],
                $row['nome_curso'],
                $row['nome_cidade']
            );
            array_push($array, $vo);
        }

        return $array;
    
    }

    public function insert($vo = null) {
        $db = new Database();
        $query = 'INSERT INTO aluno
        (matricula, nome, datanasc, email, cpf, rg, endereco, telefone, ano_turma, id_cidade, id_curso) 
        VALUES 
        (:matricula, :nome, :datanasc, :email, :cpf, :rg, :endereco, :telefone, :ano_turma, :id_cidade, :id_curso)';

        $binds = [
            ':matricula' => $vo->getMatricula(),
            ':nome' => $vo->getNome(),
            ':datanasc' => $vo->getDataNascimento(),
            ':email' => $vo->getEmail(),
            ':cpf' =>   $vo->getCPF(),
            ':rg' => $vo->getRG(),
            ':endereco' => $vo->getEndereco(),
            ':telefone' => $vo->getTelefone(),
            ':ano_turma' => $vo->getAnoTurma(),
            ':id_cidade' => $vo->getIdCidade(),
            ':id_curso' => $vo->getIdCurso()
        ];

        $success = $db->execute($query, $binds);

        return $success ? $db->getLastInsertedId() : null;
    }

    public function update($vo = null) {
        $db = new Database();

        $query = 'UPDATE aluno
                    SET  matricula = :matricula,
                    nome = :nome,
                    datanasc = :datanasc,
                    email = :email,
                    cpf = :cpf,
                    rg = :rg,
                    endereco = :endereco,
                    telefone = :telefone,
                    ano_turma = :ano_turma,
                    id_cidade = :id_cidade,
                    id_curso = :id_curso
                    WHERE id = :id';

        $binds = [
            ':matricula' => $vo->getMatricula(),
            ':nome' => $vo->getNome(),
            ':datanasc' => $vo->getDataNascimento(),
            ':email' => $vo->getEmail(),
            ':cpf' =>   $vo->getCPF(),
            ':rg' => $vo->getRG(),
            ':endereco' => $vo->getEndereco(),
            ':telefone' => $vo->getTelefone(),
            ':ano_turma' => $vo->getAnoTurma(),
            ':id_cidade' => $vo->getIdCidade(),
            ':id_curso' => $vo->getIdCurso(),
            ':id' => $vo->getId()
        ];

        return $db->execute($query, $binds);
    }

    public function delete($vo = null) {
        $db = new Database();
        $query = 'DELETE FROM aluno WHERE id = :id';
        $binds = [':id' => $vo->getId()];

        return $db->execute($query, $binds);
    }
}
