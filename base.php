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
?>