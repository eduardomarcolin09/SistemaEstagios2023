<?php

namespace Model\VO;

final class ProfessorVO extends VO {
    private $nome;
    private $email;
    private $idArea;
    private $nome_area;

    public function __construct($id = 0, $nome = '', $email = '', $idArea = '', $nome_area = '') {
        parent::__construct($id);
        $this->nome = $nome;
        $this->email = $email;
        $this->idArea = $idArea;
        $this->nome_area = $nome_area;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getIdArea() {
        return $this->idArea;
    }

    public function setIdArea($idArea) {
        $this->idArea = $idArea;
    }

    public function getNomeArea() {
        return $this->nome_area;
    }

    public function setNomeArea($nome_area) {
        $this->nome_area = $nome_area;
    }
}