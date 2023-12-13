<?php

namespace Model;

use Model\VO\ProfessorVO;
use Util\Database;

final class ProfessorModel extends Model {
    public function selectAll($vo = null) {
        $db = new Database();
        $data = $db->select('
                            SELECT 
                            professor.id, professor.nome, professor.email, professor.id_area, area.nome as nome_area
                            FROM professor
                            JOIN area
                            ON professor.id_area = area.id
        ');

        $array = [];

        foreach ($data as $row) {
            $vo = new ProfessorVO(
                $row['id'],
                $row['nome'],
                $row['email'],
                $row['id_area'],
                $row['nome_area']
            );
            array_push($array, $vo);
        }

        return $array;
    }

    public function selectNaoCoordenadores($vo = null) {
        $db = new Database();
        $data = $db->select('
                            SELECT 
                            professor.id, professor.nome, professor.email, professor.id_area, area.nome as nome_area
                            FROM professor
                            JOIN area
                            ON professor.id_area = area.id
                            WHERE professor.id not in(select id_coordenador from curso)
        ');

        $array = [];

        foreach ($data as $row) {
            $vo = new ProfessorVO(
                $row['id'],
                $row['nome'],
                $row['email'],
                $row['id_area'],
                $row['nome_area']
            );
            array_push($array, $vo);
        }

        return $array;
    }

    public function selectOne($vo = null) {
        $db = new Database();
        $query = 'SELECT * FROM professor WHERE id = :id';
        $binds = [':id' => $vo->getId()];
        $data = $db->select($query, $binds);

        if (count($data) === 0) return null;

        return new ProfessorVO(
            $data[0]['id'],
            $data[0]['nome'],
            $data[0]['email'],
            $data[0]['id_area']
        );
    }

    public function insert($vo = null) {
        $db = new Database();
        $query = 'INSERT INTO professor (nome, email, id_area) VALUES ( :nome, :email, :id_area)';

        $binds = [
            ':nome' => $vo->getNome(),
            ':email' => $vo->getEmail(),
            ':id_area' => $vo->getIdArea()
        ];

        $success = $db->execute($query, $binds);

        return $success ? $db->getLastInsertedId() : null;
    }

    public function update($vo = null) {
        $db = new Database();

        $query = 'UPDATE professor
                    SET  
                    nome = :nome,
                    email = :email,
                    id_area = :id_area
                    WHERE id = :id';

        $binds = [
            ':nome' => $vo->getNome(),
            ':email' => $vo->getEmail(),
            ':id_area' => $vo->getIdArea(),
            ':id' => $vo->getId()
        ];

        return $db->execute($query, $binds);
    }

    public function delete($vo = null) {
        $db = new Database();
        $query = 'DELETE FROM professor WHERE id = :id';
        $binds = [':id' => $vo->getId()];

        return $db->execute($query, $binds);
    }
}
