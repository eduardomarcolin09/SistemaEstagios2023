<?php

namespace Model;

use Model\VO\AreaVO;
use Util\Database;

final class AreaModel extends Model {
    public function selectAll($vo = null) {
        $db = new Database();
        $data = $db->select('SELECT * FROM area');

        $array = [];

        foreach ($data as $row) {
            $vo = new AreaVO($row['id'], $row['nome']);
            array_push($array, $vo);
        }

        return $array;
    }
    public function selectOne($vo = null) {
        $db = new Database();
        $query = 'SELECT * FROM area WHERE id = :id';
        $binds = [':id' => $vo->getId()];
        $data = $db->select($query, $binds);

        if (count($data) === 0) return null;

        return new AreaVO(
            $data[0]['id'],
            $data[0]['nome']
        );
    }

    public function insert($vo = null) {
        $db = new Database();
        $query = 'INSERT INTO area
        (nome) 
        VALUES 
        (:nome)';

        $binds = [':nome' => $vo->getNome()];

        $success = $db->execute($query, $binds);

        return $success ? $db->getLastInsertedId() : null;
    }

    public function update($vo = null) {
        $db = new Database();
        $binds = [
            ':nome' => $vo->getNome(),
            ':id' => $vo->getId()
        ];

        $query = 'UPDATE area
                    SET nome = :nome
                    WHERE id = :id';

        return $db->execute($query, $binds);
    }

    public function delete($vo = null) {
        $db = new Database();
        $query = 'DELETE FROM area WHERE id = :id';
        $binds = [':id' => $vo->getId()];

        return $db->execute($query, $binds);
    }
}
