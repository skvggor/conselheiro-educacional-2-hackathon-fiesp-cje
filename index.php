<?php
include "template/cabecalho.php";

// Funções básicas do sistema
include "base.php";
?>


    <section class="layout">
      <p>
        <?php
          $dados = selecionarDados();
          echo $dados[0]["post_content"];
        ?>
      </p>
    </section>


<?php include "template/rodape.php"; ?>