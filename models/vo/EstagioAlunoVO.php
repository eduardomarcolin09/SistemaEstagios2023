<?php

namespace Model\VO;
use DateInterval;

final class EstagioAlunoVO extends VO {
    private $id_aluno;
    private $id_empresa;
    private $carga_horaria;
    private $id_coordenador;
    private $tipo_processo_estagio;
    private $numero_encaminhamentos;
    private $situacao_estagio;
    private $data_inicio;
    private $previsao_fim;
    private $id_orientador;
    private $id_coorientador;
    private $id_supervisor;
    private $data_fim;
    private $id_area;
    private $url_termo_compromisso;
    private $url_plano_atividades;
    private $url_avaliacao_empresa;
    private $url_tcc;
    private $url_autoavaliacao;
    private $nome_aluno;
    private $nome_empresa;
    private $nome_coordenador;
    private $nome_orientador;
    private $nome_coorientador;
    private $nome_supervisor;
    private $nome_area;

    public function __construct(
        $id = 0,
        $id_aluno = 0,
        $id_empresa = 0,
        $carga_horaria = 200,
        $id_coordenador = 0,
        $tipo_processo_estagio = '',
        $numero_encaminhamentos = 0,
        $situacao_estagio = 'Não Iniciado',
        $data_inicio = '',
        $previsao_fim = '',
        $id_orientador = 0,
        $id_coorientador = 0,
        $id_supervisor = 0,
        $data_fim = '',
        $id_area = 0,
        $url_termo_compromisso = '',
        $url_plano_atividades = '',
        $url_avaliacao_empresa = '',
        $url_tcc = '',
        $url_autoavaliacao = '',
        $nome_aluno = '',
        $nome_empresa = '',
        $nome_coordenador = '',
        $nome_orientador = '',
        $nome_coorientador = '',
        $nome_supervisor = '',
        $nome_area = ''
    ) {
        parent::__construct($id);
        $this->id_aluno = $id_aluno;
        $this->id_empresa = $id_empresa;
        $this->carga_horaria = $carga_horaria;
        $this->id_coordenador = $id_coordenador;
        $this->tipo_processo_estagio = $tipo_processo_estagio;
        $this->numero_encaminhamentos = $numero_encaminhamentos;
        $this->situacao_estagio = $situacao_estagio;
        $this->data_inicio = $data_inicio;
        // $this->previsao_fim = $previsao_fim;

        $horas_diarias = 6;
        // $dias = ceil($carga_horaria / $horas_diarias);

        // $this->previsao_fim->add(new DateInterval("P{$dias}D"));
        $this->previsao_fim = $data_inicio;
        $this->id_orientador = $id_orientador;
        $this->id_coorientador = $id_coorientador;
        $this->id_supervisor = $id_supervisor;
        $this->data_fim = $data_fim;
        $this->id_area = $id_area;
        $this->url_termo_compromisso = $url_termo_compromisso;
        $this->url_plano_atividades = $url_plano_atividades;
        $this->url_avaliacao_empresa = $url_avaliacao_empresa;
        $this->url_tcc = $url_tcc;
        $this->url_autoavaliacao = $url_autoavaliacao;
        $this->nome_aluno = $nome_aluno;
        $this->nome_empresa = $nome_empresa;
        $this->nome_coordenador = $nome_coordenador;
        $this->nome_orientador = $nome_orientador;
        $this->nome_coorientador = $nome_coorientador;
        $this->nome_supervisor = $nome_supervisor;
        $this->nome_area = $nome_area;
    }

    public function getIdAluno() {
        return $this->id_aluno;
    }

    public function setIdAluno($id_aluno) {
        $this->id_aluno = $id_aluno;
    }

    public function getIdEmpresa() {
        return $this->id_empresa;
    }

    public function setIdEmpresa($id_empresa) {
        $this->id_empresa = $id_empresa;
    }

    public function getCargaHoraria() {
        return $this->carga_horaria;
    }

    public function setCargaHoraria($carga_horaria) {
        $this->carga_horaria = $carga_horaria;
    }

    public function getIdCoordenador() {
        return $this->id_coordenador;
    }

    public function setIdCoordenador($id_coordenador) {
        $this->id_coordenador = $id_coordenador;
    }

    public function getTipoProcessoEstagio() {
        return $this->tipo_processo_estagio;
    }

    public function setTipoProcessoEstagio($tipo_processo_estagio) {
        $this->$tipo_processo_estagio = $tipo_processo_estagio;
    }

    public function getNumeroEncaminhamentos() {
        return $this->numero_encaminhamentos;
    }

    public function setNumeroEncaminhamentos($numero_encaminhamentos) {
        $this->numero_encaminhamentos = $numero_encaminhamentos;
    }

    public function getSituacaoEstagio() {
        return $this->situacao_estagio;
    }

    public function setSituacaoEstagio($situacao_estagio) {
        $this->situacao_estagio = $situacao_estagio;
    }

    public function getDataInicio() {
        return $this->data_inicio;
    }

    public function setDataInicio($data_inicio) {
        $this->data_inicio = $data_inicio;
    }

    public function getPrevisaoFim() {
        return $this->previsao_fim;
    }

    public function setPrevisaoFim($previsao_fim, $horas_totais, $horas_diarias) {
        $this->previsao_fim = $previsao_fim;

        $dias = ceil($horas_totais / $horas_diarias);

        $this->previsao_fim->add(new DateInterval("P{$dias}D"));
    }

    public function getIdOrientador() {
        return $this->id_orientador;
    }

    public function setIdOrientador($id_orientador) {
        $this->id_orientador = $id_orientador;
    }

    public function getIdCoorientador() {
        return $this->id_coorientador;
    }

    public function setIdCoorientador($id_coorientador) {
        $this->id_coorientador = $id_coorientador;
    }

    public function getIdSupervisor() {
        return $this->id_supervisor;
    }

    public function setIdSupervisor($id_supervisor) {
        $this->id_supervisor = $id_supervisor;
    }

    public function getDataFim() {
        return $this->data_fim;
    }

    public function setDataFim($data_fim) {
        $this->data_fim = $data_fim;
    }

    public function getIdArea() {
        return $this->id_area;
    }

    public function setIdArea($id_area) {
        $this->id_area = $id_area;
    }
    public function getNomeAluno() {
        return $this->nome_aluno;
    }
    public function setNomeAluno($nome_aluno) {
        $this->nome_aluno = $nome_aluno;
    }
    public function getNomeEmpresa() {
        return $this->nome_empresa;
    }

    public function setNomeEmpresa($nome_empresa) {
        $this->nome_empresa = $nome_empresa;
    }
    public function getNomeCoordenador() {
        return $this->nome_coordenador;
    }

    public function setNomeCoordenador($nome_coordenador) {
        $this->nome_coordenador = $nome_coordenador;
    }

    public function getNomeOrientador() {
        return $this->nome_orientador;
    }

    public function setNomeOrientador($nome_orientador) {
        $this->nome_orientador = $nome_orientador;
    }

    public function getNomeCoorientador() {
        return $this->nome_coorientador;
    }

    public function setNomeCoorientador($nome_coorientador) {
        $this->nome_coorientador = $nome_coorientador;
    }

    public function getNomeSupervisor() {
        return $this->nome_supervisor;
    }

    public function setNomeSupervisor($nome_supervisor) {
        $this->nome_supervisor = $nome_supervisor;
    }

    public function getNomeArea() {
        return $this->nome_area;
    }

    public function setNomeArea($nome_area) {
        $this->nome_area = $nome_area;
    }

    public function getUrlTermoCompromisso() {
        return $this->url_termo_compromisso;
    }

    public function setUrlTermoCompromisso($url_termo_compromisso) {
        $this->url_termo_compromisso = $url_termo_compromisso;
    }

    public function getUrlPlanoAtividades() {
        return $this->url_plano_atividades;
    }

    public function setUrlPlanoAtividades($url_plano_atividades) {
        $this->url_plano_atividades = $url_plano_atividades;
    }

    public function getUrlAvaliacaoEmpresa() {
        return $this->url_avaliacao_empresa;
    }

    public function setUrlAvaliacaoEmpresa($url_avaliacao_empresa) {
        $this->url_avaliacao_empresa = $url_avaliacao_empresa;
    }

    public function getUrlTcc() {
        return $this->url_tcc;
    }

    public function setUrlTcc($url_tcc) {
        $this->url_tcc = $url_tcc;
    }

    public function getUrlAutoavaliacao() {
        return $this->url_autoavaliacao;
    }

    public function setUrlAutoavaliacao($url_autoavaliacao) {
        $this->url_autoavaliacao = $url_autoavaliacao;
    }
}
