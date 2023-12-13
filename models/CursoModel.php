<?php

namespace Model;

use Model\VO\CursoVO;
use Util\Database;

final class CursoModel extends Model {
    public function selectAll($vo = null) {
        $db = new Database();
        $data = $db->select('
                            SELECT 
                            curso.id,
                            curso.nome,
                            curso.id_coordenador,
                            coordenador.nome as "nome_coordenador"
                            FROM curso
                            JOIN professor coordenador ON
                            curso.id_coordenador = coordenador.id
                             ');

        $array = [];

        foreach ($data as $row) {
            $vo = new CursoVO(
                $row['id'],
                $row['nome'],
                $row['id_coordenador'],
                $row['nome_coordenador']
            );
            array_push($array, $vo);
        }

        return $array;
    }
    public function selectOne($vo = null) {
        $db = new Database();
        $query = 'SELECT * FROM curso WHERE id = :id';
        $binds = [':id' => $vo->getId()];
        $data = $db->select($query, $binds);

        if (count($data) === 0) return null;

        return new CursoVO(
            $data[0]['id'],
            $data[0]['nome'],
            $data[0]['id_coordenador']
        );
    }

    public function insert($vo = null) {
        $db = new Database();
        $query = 'INSERT INTO curso
        (nome, id_coordenador) 
        VALUES 
        (:nome, :id_coordenador)';

        $binds = [
            ':nome' => $vo->getNome(),
            ':id_coordenador' => $vo->getIdCoordenador()
        ];

        $success = $db->execute($query, $binds);

        return $success ? $db->getLastInsertedId() : null;
    }

    public function update($vo = null) {
        $db = new Database();
        $binds = [
            ':nome' => $vo->getNome(),
            ':id_coordenador' => $vo->getIdCoordenador(),
            ':id' => $vo->getId()
        ];

        $query = 'UPDATE curso
                    SET nome = :nome,
                    id_coordenador = :id_coordenador
                    WHERE id = :id';


        return $db->execute($query, $binds);
    }

    public function delete($vo = null) {
        $db = new Database();
        $query = 'DELETE FROM curso WHERE id = :id';
        $binds = [':id' => $vo->getId()];

        return $db->execute($query, $binds);
    }
}
