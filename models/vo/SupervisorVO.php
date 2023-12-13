<?php

namespace Model\VO;

final class SupervisorVO extends VO {
    private $nome;
    private $telefone;
    private $email;
    private $id_empresa;
    private $cargo;
    private $nome_empresa;

    public function __construct($id = 0, $nome = '', $telefone = '', $email = '', $id_empresa = '' , $cargo = '', $nome_empresa = '') {
        parent::__construct($id);
        $this->nome = $nome;
        $this->telefone = $telefone;  
        $this->email = $email;
        $this->id_empresa = $id_empresa;
        $this->cargo = $cargo;
        $this->nome_empresa = $nome_empresa;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    
    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getIdEmpresa() {
        return $this->id_empresa;
    }

    public function setIdEmpresa($id_empresa) {
        $this->id_empresa= $id_empresa;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    public function getNomeEmpresa() {
        return $this->nome_empresa;
    }

    public function setNomeEmpresa($nome_empresa) {
        $this->nome_empresa = $nome_empresa;
    }
}