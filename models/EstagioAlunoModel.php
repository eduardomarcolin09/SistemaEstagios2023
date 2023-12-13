<?php

namespace Model;

use Model\VO\EstagioAlunoVO;
use Util\Database;

final class EstagioAlunoModel extends Model {
    public function selectAll($vo = null) {
        $db = new Database();
        $data = $db->select('SELECT estagio_aluno.id,
        estagio_aluno.id_aluno,
        estagio_aluno.id_empresa,
        estagio_aluno.carga_horaria,
        estagio_aluno.id_coordenador,
        estagio_aluno.tipo_processo_estagio,
        estagio_aluno.numero_encaminhamentos,
        estagio_aluno.situacao_estagio,
        estagio_aluno.data_inicio,
        estagio_aluno.previsao_fim,
        estagio_aluno.id_orientador,
        estagio_aluno.id_coorientador,
        estagio_aluno.id_supervisor,
        estagio_aluno.data_fim,
        estagio_aluno.id_area,
        estagio_aluno.url_termo_compromisso,
        estagio_aluno.url_plano_atividades,
        estagio_aluno.url_avaliacao_empresa,
        estagio_aluno.url_tcc,
        estagio_aluno.url_autoavaliacao,
        aluno.nome as nome_aluno,
        empresa.nome as nome_empresa,
        orientador.nome as "nome_orientador",
        coorientador.nome as "nome_coorientador",
        coordenador.nome as "nome_coordenador",
        supervisor.nome as "nome_supervisor",
        area.nome as nome_area
        FROM estagio_aluno
        JOIN aluno
        ON estagio_aluno.id_aluno = aluno.id
        JOIN empresa
        ON estagio_aluno.id_empresa = empresa.id
        JOIN professor orientador
        ON estagio_aluno.id_orientador = orientador.id
        JOIN professor coorientador
        ON estagio_aluno.id_coorientador = coorientador.id
        JOIN professor coordenador
        ON estagio_aluno.id_coordenador = coordenador.id
        JOIN supervisor
        ON estagio_aluno.id_supervisor = supervisor.id
        JOIN area
        ON estagio_aluno.id_area = area.id
        ');

        $array = [];

        foreach ($data as $row) {
            $vo = new EstagioAlunoVO(
                $row['id'],
                $row['id_aluno'],
                $row['id_empresa'],
                $row['carga_horaria'],
                $row['id_coordenador'],
                $row['tipo_processo_estagio'],
                $row['numero_encaminhamentos'],
                $row['situacao_estagio'],
                $row['data_inicio'],
                $row['previsao_fim'],
                $row['id_orientador'],
                $row['id_coorientador'],
                $row['id_supervisor'],
                $row['data_fim'],
                $row['id_area'],
                $row['url_termo_compromisso'],
                $row['url_plano_atividades'],
                $row['url_avaliacao_empresa'],
                $row['url_tcc'],
                $row['url_autoavaliacao'],
                $row['nome_aluno'],
                $row['nome_empresa'],
                $row['nome_coordenador'],
                $row['nome_orientador'],
                $row['nome_coorientador'],
                $row['nome_supervisor'],
                $row['nome_area']
            );
            array_push($array, $vo);
        }

        return $array;
    }
    public function selectOne($vo = null) {
        $db = new Database();
        $query = 'SELECT * FROM estagio_aluno WHERE id = :id';
        $binds = [':id' => $vo->getId()];
        $data = $db->select($query, $binds);
    
        if (count($data) === 0) return null;
    
        return new EstagioAlunoVO(
            $data[0]['id'],
            $data[0]['id_aluno'],
            $data[0]['id_empresa'],
            $data[0]['carga_horaria'],
            $data[0]['id_coordenador'],
            $data[0]['tipo_processo_estagio'],
            $data[0]['numero_encaminhamentos'],
            $data[0]['situacao_estagio'],
            $data[0]['data_inicio'],
            $data[0]['previsao_fim'],
            $data[0]['id_orientador'],
            $data[0]['id_coorientador'],
            $data[0]['id_supervisor'],
            $data[0]['data_fim'],
            $data[0]['id_area'],
            $data[0]['url_termo_compromisso'],
            $data[0]['url_plano_atividades'],
            $data[0]['url_avaliacao_empresa'],
            $data[0]['url_tcc'],
            $data[0]['url_autoavaliacao']
        );
    }
    
    public function insert($vo = null) {
        $db = new Database();
        $query = 'INSERT INTO estagio_aluno
        (id,
        id_aluno,
        id_empresa,
        carga_horaria,
        id_coordenador,
        tipo_processo_estagio,
        numero_encaminhamentos,
        situacao_estagio,
        data_inicio,
        previsao_fim,
        id_orientador,
        id_coorientador,
        id_supervisor,
        data_fim,
        id_area,
        url_termo_compromisso,
        url_plano_atividades,
        url_avaliacao_empresa,
        url_tcc,
        url_autoavaliacao)
        VALUES 
        (:id,
        :id_aluno,
        :id_empresa,
        :carga_horaria,
        :id_coordenador,
        :tipo_processo_estagio,
        :numero_encaminhamentos,
        :situacao_estagio,
        :data_inicio,
        :previsao_fim,
        :id_orientador,
        :id_coorientador,
        :id_supervisor,
        :data_fim,
        :id_area,
        :url_termo_compromisso,
        :url_plano_atividades,
        :url_avaliacao_empresa,
        :url_tcc,
        :url_autoavaliacao)';
    
        $binds = [
            ':id' =>   $vo->getId(),
            ':id_aluno' =>  $vo->getIdAluno(),
            ':id_empresa' =>  $vo->getIdEmpresa(),
            ':carga_horaria' =>  $vo->getCargaHoraria(),
            ':id_coordenador' =>  $vo->getIdCoordenador(),
            ':tipo_processo_estagio' =>  $vo->getTipoProcessoEstagio(),
            ':numero_encaminhamentos' =>  $vo->getNumeroEncaminhamentos(),
            ':situacao_estagio' =>  $vo->getSituacaoEstagio(),
            ':data_inicio' =>  $vo->getDataInicio(),
            ':previsao_fim' =>  $vo->getPrevisaoFim(),
            ':id_orientador' =>  $vo->getIdOrientador(),
            ':id_coorientador' =>  $vo->getIdCoorientador(),
            ':id_supervisor' =>  $vo->getIdSupervisor(),
            ':data_fim' =>  $vo->getDataFim(),
            ':id_area' =>  $vo->getIdArea(),
            ':url_termo_compromisso' =>  $vo->getUrlTermoCompromisso(),
            ':url_plano_atividades' =>  $vo->getUrlPlanoAtividades(),
            ':url_avaliacao_empresa' =>  $vo->getUrlAvaliacaoEmpresa(),
            ':url_tcc' =>  $vo->getUrlTcc(),
            ':url_autoavaliacao' =>  $vo->getUrlAutoavaliacao()
        ];
    
        $success = $db->execute($query, $binds);
    
        return $success ? $db->getLastInsertedId() : null;
    }
    
    public function update($vo = null) {
        $db = new Database();
    
        $query = 'UPDATE estagio_aluno
                    SET
                    id_aluno  =  :id_aluno,
                    id_empresa =  :id_empresa,
                    carga_horaria =  :carga_horaria,
                    id_coordenador =  :id_coordenador,
                    tipo_processo_estagio =  :tipo_processo_estagio,
                    numero_encaminhamentos =  :numero_encaminhamentos,
                    situacao_estagio =  :situacao_estagio,
                    data_inicio =  :data_inicio,
                    previsao_fim =  :previsao_fim,
                    id_orientador =  :id_orientador,
                    id_coorientador =  :id_coorientador,
                    id_supervisor =  :id_supervisor,
                    data_fim =  :data_fim,
                    id_area =  :id_area,
                    url_termo_compromisso =  :url_termo_compromisso,
                    url_plano_atividades =  :url_plano_atividades,
                    url_avaliacao_empresa =  :url_avaliacao_empresa,
                    url_tcc =  :url_tcc,
                    url_autoavaliacao =  :url_autoavaliacao
                    WHERE id = :id';
    
        $binds = [
            ':id' =>  $vo->getId(),
            ':id_aluno' =>  $vo->getIdAluno(),
            ':id_empresa' =>  $vo->getIdEmpresa(),
            ':carga_horaria' =>  $vo->getCargaHoraria(),
            ':id_coordenador' =>  $vo->getIdCoordenador(),
            ':tipo_processo_estagio' =>  $vo->getTipoProcessoEstagio(),
            ':numero_encaminhamentos' =>  $vo->getNumeroEncaminhamentos(),
            ':situacao_estagio' =>  $vo->getSituacaoEstagio(),
            ':data_inicio' =>  $vo->getDataInicio(),
            ':previsao_fim' =>  $vo->getPrevisaoFim(),
            ':id_orientador' =>  $vo->getIdOrientador(),
            ':id_coorientador' =>  $vo->getIdCoorientador(),
            ':id_supervisor' =>  $vo->getIdSupervisor(),
            ':data_fim' =>  $vo->getDataFim(),
            ':id_area' =>  $vo->getIdArea(),
            ':url_termo_compromisso' =>  $vo->getUrlTermoCompromisso(),
            ':url_plano_atividades' =>  $vo->getUrlPlanoAtividades(),
            ':url_avaliacao_empresa' =>  $vo->getUrlAvaliacaoEmpresa(),
            ':url_tcc' =>  $vo->getUrlTcc(),
            ':url_autoavaliacao' =>  $vo->getUrlAutoavaliacao()
        ];
    
        return $db->execute($query, $binds);
    }
    
    public function delete($vo = null) {
        $db = new Database();
        $query = 'DELETE FROM estagio_aluno WHERE id = :id';
        $binds = [':id' => $vo->getId()];
    
        return $db->execute($query, $binds);
    }    
}