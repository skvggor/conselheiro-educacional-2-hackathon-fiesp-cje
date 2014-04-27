<?php
include "template/cabecalho.php";

// Funções básicas do sistema
include "base.php";

// Alimenta seção 'Meus Dados'
$meusDados = obterMeusDados();
?>
  <!-- HOME -->
  <section data-role="page" id="home">
    <section data-role="header" class="header">
      <h1>Vocali</h1>
    </section>

    <section class="formulario-cadastro">
      <section data-role="header" class="header">
        <h2>Informe seus dados</h2>
      </section>
      <input type="email" placeholder="E-mail" required>
      <input type="password" placeholder="Senha" required>
      <input type="submit" value="Entrar" data-icon="check">
    </section>
    <section class="logotipo-app"></section>
    <section data-role="footer" class="footer"></section>
  </section>
  <!-- end HOME -->

  <!-- PAINEL BEBE-->
  <section data-role="page" id="painel-bebe">
    <section data-role="header" class="header">
      <h1>Conselheiro Educacional</h1>
    </section>

    <section class="menu bebe">
      <a href="#meus-dados" data-role="button" data-transition="pop" data-icon="grid">Meus dados</a>
      <a href="#analises" data-role="button" data-transition="pop" data-icon="arrow-r">Análises</a>
      <a href="#ocorrencias" data-role="button" data-transition="pop" data-icon="alert">Ocorrências</a>
      <a href="#home" data-role="button" data-transition="pop" data-icon="delete">Sair</a>
    </section>

    <section data-role="footer" class="footer"></section>
  </section>
  <!-- end PAINEL BEBE-->

  <!-- PAINEL CRIANÇA -->
  <section data-role="page" id="painel-crianca">
    <section data-role="header" class="header">
      <h1>Conselheiro Educacional</h1>
    </section>

    <section class="menu crianca">
      <a href="#meus-dados" data-role="button" data-transition="pop" data-icon="grid">Meus dados</a>
      <a href="#analises" data-role="button" data-transition="pop" data-icon="arrow-r">Análises</a>
      <a href="#projetos" data-role="button" data-transition="pop" data-icon="star">Projetos</a>
      <a href="#ocorrencias" data-role="button" data-transition="pop" data-icon="alert">Ocorrências</a>
      <a href="#home" data-role="button" data-transition="pop" data-icon="delete">Sair</a>
    </section>

    <section data-role="footer" class="footer"></section>
  </section>
  <!-- end PAINEL CRIANÇA -->

  <!-- PAINEL ADULTO -->
  <section data-role="page" id="painel-adulto">
    <section data-role="header" class="header">
      <h1>Conselheiro Educacional</h1>
    </section>

    <section class="menu adulto">
      <a href="#meus-dados" data-role="button" data-transition="pop" data-icon="grid">Meus dados</a>
      <a href="#analises" data-role="button" data-transition="pop" data-icon="arrow-r">Análises</a>
      <a href="#projetos" data-role="button" data-transition="pop" data-icon="star">Projetos</a>
      <a href="#ocorrencias" data-role="button" data-transition="pop" data-icon="alert">Ocorrências</a>
      <a href="#plano-de-carreira" data-role="button" data-transition="pop" data-icon="plus">Plano de Carreira</a>
      <a href="#curriculo" data-role="button" data-transition="pop" data-icon="info">Currículo</a>
      <a href="#home" data-role="button" data-transition="pop" data-icon="delete">Sair</a>
    </section>

    <section data-role="footer" class="footer"></section>
  </section>
  <!-- end PAINEL ADULTO-->

  <!-- /////////////////////////////// PÁGINAS INTERNAS /////////////////////////////// -->
  <!-- MEUS DADOS -->
  <section data-role="page" id="meus-dados">
    <section data-role="header" class="header">
      <h1>
        <?php echo $meusDados[0]["sis_razao_social"]; ?>
      </h1>
    </section>

    <section class="dados-pessoa">
      <section class="nome">
        <?php echo $meusDados[0]["sal_nome_completo"]; ?>
      </section>

      <section class="faltas">
        <span>R.G.:</span> <?php echo $meusDados[0]["sal_rg"]; ?>
      </section>
    </section>

    <section class="tabela-escolar">
      <table id="tabela-escolar"
             data-role="table"
             data-mode="columntoggle"
             class="ui-responsive">
        <thead>
          <tr>
            <th>Matérias</th>
            <th>Notas</th>
            <th>Faltas</th>
          </tr>
        </thead>

        <tbody>
          <?php
          $total = count($meusDados);

          if (isset($total) && $total > 0) {
            for ($i = 0; $i <= $total; $i += 1) { ?>
              </tr>
              <tr>
                <td><?php echo $meusDados[$i]["smt_materia"]; ?></td>
                <td><?php echo $meusDados[$i]["san_nota"]; ?></td>
                <td><?php echo $meusDados[$i]["san_faltas"]; ?></td>
              </tr>
            <?php } ?>
          <?php } ?>
        </tbody>

      </table>
    </section>

    <section data-role="footer" class="footer">
      <a href="#painel-bebe" data-transition="pop" data-role="button" data-icon="arrow-l">Voltar</a>
    </section>

  </section>
  <!-- MEUS DADOS-->
  <!-- //////////////////////////// end PÁGINAS INTERNAS //////////////////////////// -->

<?php include "template/rodape.php"; ?>