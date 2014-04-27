<?php
// Funções básica do sistema
// Obs.: Implementar back end futuramente em Python (Flask) 

include "php-classes/mysql_crud.php";

function selecionarDados()
{
  $db = new Database();
  $db -> connect();

  // Dados para query
  $tabela = "wp_posts";
  $campo = "post_content";
  $where = "ID = 63";

  $db -> select($tabela, $campo, '', $where);
  return $db -> getResult();
}

function inserirAluno() {
  $db = new Database();
  $db -> connect();

  $db -> insert('sys_alunos', array(
      'sal_nome_completo' => 'Marcos Garcia de Lima',
      'sal_nome_mae' => 'Alice Garcia de Lima',
      'sal_nome_pai' => 'Daniel de Lima',
      'sal_login' => 'marcos.garcia',
      'sal_senha' => 'marcos12',
      'sal_rg' => '42882424X',
      'sal_cpf' => '32456798765',
      'fk_sys_alunos_analises_cognitivas_evidenciais' => 1)
  );
}

?>