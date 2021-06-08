<?php require_once('Cabeçalho.php'); ?>
<?php
// ATUALIZAR A LISTA DE TRILHAS CRIADAS E SALVAR NO VETOR, PARA SEREM GERADAS NOVAMENTE DEPOIS
require_once('Conexao.php');
$comando_sql = "select * from trilhas order by id";         //instrucao sql para todos os alunos
$dadosSql = $conexao->query($comando_sql);               //executa instrucao sql e salva o resultado do sql
$vetorTrilhas = $dadosSql->fetch_all(MYSQLI_ASSOC); // pega todos os registros e coloca em um vetor de registros
?>

<div class="d-grid gap-3">
  <!-- NAV  -->
  <div class="row">
    <div class="col align-self-center">
      <ul class="nav nav-tabs shadow-sm rounded">
        <li class="nav-item dropdown align-self-center">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">CONFIGURAÇÕES</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">HISTÓRICO</a></li>
            <li><a class="dropdown-item" href="#">MINHA CONTA</a></li>
            <?php if(isset($_SESSION["email"]) && $_SESSION["perfil"] == "professor") :
              echo '<li><a class="dropdown-item" href="FormTrilha.php">EDITAR TRILHAS</a></li>';
            endif ?>
          </ul>
        </li>

        <li class="nav-item align-self-center">
          <a class="nav-link active" aria-current="page" href="#">HOME</a>
        </li>
        <div class="col-6 align-self-center">
          <h1 class="text-center"><strong> TRILHAS DE APRENDIZAGEM </strong></h1>
        </div>

        <div class="col align-self-center">
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Busque por uma trilha" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
          </form>
        </div>

      </ul>
    </div>
  </div>

  <br>
  <!-- Cards  -->

  <div class="row row-cols-auto">

    <?php foreach ($vetorTrilhas as $Trilha) : ?>
      <div class="col">

      <div class="card shadow" style="width: 18rem;">
        <img src="<?= $Trilha["foto"]; ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?= $Trilha["titulo"]; ?>
            <span class="badge rounded-pill border bg-light text-primary">95%</span>
          </h5>
          <p class="card-text"><?= $Trilha["descricao"]; ?></p>
          <a href="Trilha.php" class="btn btn-primary">Entrar</a>
        </div>
      </div>

  </div>
<?php endforeach ?>
</div>
<?php require_once("Rodape.php") ?>