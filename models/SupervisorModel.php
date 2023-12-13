<?php

namespace Model;

use Model\VO\SupervisorVO;
use Util\Database;

final class SupervisorModel extends Model {
    public function selectAll($vo = null) {
        $db = new Database();
        $data = $db->select('SELECT 
                            supervisor.id,
                             supervisor.nome,
                             supervisor.telefone,
                             supervisor.email,
                             supervisor.id_empresa,
                             supervisor.cargo,
                             empresa.nome as nome_empresa
                             FROM
                            supervisor
                            JOIN empresa
                            ON supervisor.id_empresa = empresa.id');

        $array = [];

        foreach ($data as $row) {
            $vo = new SupervisorVO(
                $row['id'],
                $row['nome'],
                $row['telefone'],
                $row['email'],
                $row['id_empresa'],
                $row['cargo'],
                $row['nome_empresa']
            );
            array_push($array, $vo);
        }

        return $array;
    }
    public function selectOne($vo = null) {
        $db = new Database();
        $query = 'SELECT * FROM supervisor WHERE id = :id';
        $binds = [':id' => $vo->getId()];
        $data = $db->select($query, $binds);

        if (count($data) === 0) return null;

        return new SupervisorVO(
            $data[0]['id'],
            $data[0]['nome'],
            $data[0]['telefone'],
            $data[0]['email'],
            $data[0]['id_empresa'],
            $data[0]['cargo']
        );
    }

    public function insert($vo = null) {
        $db = new Database();
        $query = 'INSERT INTO supervisor (nome, telefone, email, id_empresa, cargo) VALUES ( :nome, :telefone, :email, :id_empresa, :cargo)';

        $binds = [
            ':nome' => $vo->getNome(),
            ':telefone' => $vo->getTelefone(),
            ':email' => $vo->getEmail(),
            ':id_empresa' => $vo->getIdEmpresa(),
            ':cargo' => $vo->getCargo()
        ];

        $success = $db->execute($query, $binds);

        return $success ? $db->getLastInsertedId() : null;
    }

    public function update($vo = null) {
        $db = new Database();

        $query = 'UPDATE Supervisor
                    SET  
                    nome = :nome,
                    telefone = :telefone,
                    email = :email,
                    id_empresa = :id_empresa,
                    cargo = :cargo
                    WHERE id = :id';

        $binds = [
            ':nome' => $vo->getNome(),
            ':telefone' => $vo->getTelefone(),
            ':email' => $vo->getEmail(),
            ':id_empresa' => $vo->getIdEmpresa(),
            ':cargo' => $vo->getCargo(),
            ':id' => $vo->getId()
        ];

        return $db->execute($query, $binds);
    }

    public function delete($vo = null) {
        $db = new Database();
        $query = 'DELETE FROM supervisor WHERE id = :id';
        $binds = [':id' => $vo->getId()];

        return $db->execute($query, $binds);
    }
}
