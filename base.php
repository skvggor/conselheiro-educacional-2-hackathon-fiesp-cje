<?php
// Funções básica do sistema
// Obs.: Implementar back end futuramente em Python (Flask) 

include "php-classes/mysql_crud.php";

/*
-- Meus Dados -- 

Select
 sis_razao_social
,sal_nome_completo
,sal_rg
,smt_materia
,san_nota
,san_faltas
from sys_alunos_notas
inner join sys_alunos
on fk_sys_alunos = sal_id_aluno
inner join sys_materias on fk_sys_materias = smt_id_materia
inner join sys_instituicoes on fk_sys_instituicoes = sis_id_instituicao
where fk_sys_alunos = 1 and fk_sys_series = 1;

*/

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

?>