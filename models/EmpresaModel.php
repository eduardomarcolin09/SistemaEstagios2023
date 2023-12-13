<?php

namespace Model;

use Model\VO\EmpresaVO;
use Util\Database;

final class EmpresaModel extends Model {
    public function selectAll($vo = null) {
        $db = new Database();
        $data = $db->select('SELECT 
        empresa.id,
        empresa.nome,
        empresa.endereco,
        empresa.telefone,
        empresa.email,
        empresa.cnpj,
        empresa.id_cidade,
        cidade.nome as nome_cidade
      FROM empresa
      JOIN cidade
      ON empresa.id_cidade = cidade.id');


        $array = [];

        foreach ($data as $row) {
            $vo = new EmpresaVO(
                $row['id'],
                $row['nome'],
                $row['endereco'],
                $row['telefone'],
                $row['email'],
                $row['cnpj'],
                $row['id_cidade'],
                $row['nome_cidade']
            );
            array_push($array, $vo);
        }

        return $array;
    }
    public function selectOne($vo = null) {
        $db = new Database();
        $query = 'SELECT * FROM empresa WHERE id = :id';
        $binds = [':id' => $vo->getId()];
        $data = $db->select($query, $binds);

        if (count($data) === 0) return null;

        return new EmpresaVO(
            $data[0]['id'],
            $data[0]['nome'],
            $data[0]['endereco'],
            $data[0]['telefone'],
            $data[0]['email'],
            $data[0]['cnpj'],
            $data[0]['id_cidade']
        );
    }

    public function insert($vo = null) {
        $db = new Database();
        $query = 'INSERT INTO empresa
            (id, nome, endereco, telefone, email, cnpj, id_cidade)
            VALUES 
            (:id, :nome, :endereco, :telefone, :email, :cnpj, :id_cidade)';
    
        $binds = [
            ':id' => $vo->getId(),
            ':nome' => $vo->getNome(),
            ':endereco' => $vo->getEndereco(),
            ':telefone' => $vo->getTelefone(),
            ':email' => $vo->getEmail(),
            ':cnpj' => $vo->getCNPJ(),
            ':id_cidade' => $vo->getIdCidade()
        ];
    
        $success = $db->execute($query, $binds);
    
        return $success ? $db->getLastInsertedId() : null;
    }
    
    public function update($vo = null) {
        $db = new Database();
    
        $query = 'UPDATE empresa
                    SET  
                    nome = :nome, 
                    endereco = :endereco, 
                    telefone = :telefone, 
                    email = :email, 
                    cnpj = :cnpj, 
                    id_cidade = :id_cidade
                    WHERE id = :id';
    
        $binds = [
            ':id' => $vo->getId(),
            ':nome' => $vo->getNome(),
            ':endereco' => $vo->getEndereco(),
            ':telefone' => $vo->getTelefone(),
            ':email' => $vo->getEmail(),
            ':cnpj' => $vo->getCNPJ(),
            ':id_cidade' => $vo->getIdCidade()
        ];
    
        return $db->execute($query, $binds);
    }

    public function delete($vo = null) {
        $db = new Database();
        $query = 'DELETE FROM empresa WHERE id = :id';
        $binds = [':id' => $vo->getId()];

        return $db->execute($query, $binds);
    }
}
