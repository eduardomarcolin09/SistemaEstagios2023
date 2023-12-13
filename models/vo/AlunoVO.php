<?php

namespace Model\VO;

final class AlunoVO extends VO {
    private $matricula;
    private $nome;
    private $datanasc;
    private $email;
    private $cpf;
    private $rg;
    private $endereco;
    private $telefone;
    private $ano_turma;
    private $id_cidade;
    private $id_curso;
    private $nome_curso;
    // private $nome_turma;
    private $nome_cidade;

    public function __construct(
        $id = 0,
        $matricula = 0,
        $nome = '',
        $datanasc = 0,
        $email = '',
        $cpf = 0,
        $rg = '',
        $endereco = '',
        $telefone = 0,
        $ano_turma = '',
        $id_cidade = 0,
        $id_curso = 0,
        $nome_curso = '',
        // $nome_turma = '',
        $nome_cidade = ''
    ) {
        parent::__construct($id);
        $this->matricula = $matricula;
        $this->nome = $nome;
        $this->datanasc = $datanasc;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->ano_turma = $ano_turma;
        $this->id_cidade = $id_cidade;
        $this->id_curso = $id_curso;
        $this->nome_curso   = $nome_curso;
        // $this->nome_turma = $nome_turma;
        $this->nome_cidade = $nome_cidade;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getDataNascimento() {
        return $this->datanasc;
    }

    public function setDataNascimento($datanasc) {
        $this->datanasc = $datanasc;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getCPF() {
        return $this->cpf;
    }

    public function setCPF($cpf) {
        $this->cpf = $cpf;
    }

    public function getRG() {
        return $this->rg;
    }

    public function setRG($rg) {
        $this->rg = $rg;
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

    public function getAnoTurma() {
        return $this->ano_turma;
    }

    public function setAnoTurma($ano_turma) {
        $this->ano_turma = $ano_turma;
    }

    public function getIdCidade() {
        return $this->id_cidade;
    }

    public function setIdCidade($id_cidade) {
        $this->id_cidade = $id_cidade;
    }

    public function getIdCurso() {
        return $this->id_curso;
    }

    public function getNomeCurso() {
        return $this->nome_curso;
    }

    public function setNomeCurso($nome_curso) {
        $this->nome_curso = $nome_curso;
    }

    // public function getNomeTurma() {
    //     return $this->nome_turma;
    // }

    // public function setNomeTurma($nome_turma) {
    //     $this->nome_turma = $nome_turma;
    // }

    public function getNomeCidade() {
        return $this->nome_cidade;
    }

    public function setNomeCidade($nome_cidade) {
        $this->nome_cidade = $nome_cidade;
    }
}
