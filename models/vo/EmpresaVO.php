<?php

namespace Model\VO;

final class EmpresaVO extends VO {
    protected $id;
    protected $nome;
    protected $endereco;
    protected $telefone;
    protected $email;
    protected $cnpj;
    protected $id_cidade;
    private $nome_cidade;
    
    public function __construct(
        $id = 0,
        $nome = '',
        $endereco = '',
        $telefone = 0,
        $email = '',
        $cnpj = 0,
        $id_cidade = 0,
        $nome_cidade = ''
    ) {
        parent::__construct($id);
        $this->id = $id;
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->cnpj = $cnpj;
        $this->id_cidade = $id_cidade;
        $this->nome_cidade = $nome_cidade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
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

    public function getCNPJ() {
        return $this->cnpj;
    }

    public function setCNPJ($cnpj) {
        $this->cnpj = $cnpj;
    }

    public function getIdCidade() {
        return $this->id_cidade;
    }

    public function setIdCidade($id_cidade) {
        $this->id_cidade = $id_cidade;
    }

    public function getNomeCidade() {
        return $this->nome_cidade;
    }

    public function setNomeCidade($nome_cidade) {
        $this->nome_cidade = $nome_cidade;
    }

}
