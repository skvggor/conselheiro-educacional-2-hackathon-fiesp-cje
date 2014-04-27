<?php
// Funções básica do sistema
// Obs.: Implementar back end futuramente em Python (Flask) 

include "php-classes/mysql_crud.php";

function obterMeusDados()
{
  $db = new Database();
  $db -> connect();

  // Dados para query
  $tabela = "sys_alunos_notas";
  $campo = "sis_razao_social,
            sal_nome_completo,
            sal_rg,
            smt_materia,
            san_nota,
            san_faltas";
  $join = "sys_alunos
           on fk_sys_alunos = sal_id_aluno
           inner join sys_materias on fk_sys_materias = smt_id_materia
           inner join sys_instituicoes on fk_sys_instituicoes = sis_id_instituicao";
  $where = "fk_sys_alunos = 1 
            and fk_sys_series = 1";

  $db -> select($tabela, $campo, $join, $where);
  return $db -> getResult();
}

function obterAnalises()
{
  $db = new Database();
  $db -> connect();

  $tabela = "sys_alunos_analises_cognitivas_evidenciais";
  $campo = "sis_razao_social, 
            sal_nome_completo,
            sal_nome_mae,
            sac_titulo,
            sac_descricao_completa";
  $join = "sys_alunos
           on fk_sys_alunos = sal_id_aluno
           inner join sys_analises_tipos on fk_sys_analises_tipos = sat_id_analise
           inner join sys_instituicoes on fk_sys_instituicoes = sis_id_instituicao";
  $where = "fk_sys_alunos = 1 limit 10";

  $db -> select($tabela, $campo, $join, $where);
  return $db -> getResult();
}

function obterOcorrencias()
{
  $db = new Database();
  $db -> connect();

  $tabela = "sys_reclamacoes";
  $campo = "sal_nome_completo,
            sco_descricao,
            sre_descricao,
            sre_data,
            sal_nome_completo,
            sco_descricao,
            sre_descricao,
            sre_data";
  $join = "sys_alunos
           on fk_sys_alunos = sal_id_aluno
           inner join sys_categoria_ocorrencias on fk_sys_categoria_ocorrencias = sco_id_ocorrencia";
  $where = "fk_sys_alunos = 1;";

  $db -> select($tabela, $campo, $join, $where);
  return $db -> getResult();
}

?>