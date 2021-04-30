<?php require_once('Cabeçalho.php'); ?>

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
    <div class="col">

      <div class="card shadow" style="width: 18rem;">
        <img src="fotos/FilosofiaAntiga.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Filosofia Antiga
            <span class="badge rounded-pill border bg-light text-primary">95%</span>
          </h5>
          <p class="card-text">Descrição da Trilha</p>
          <a href="FormTrilha.php" class="btn btn-primary">Área de Acesso</a>
        </div>
      </div>

    </div>
    <div class="col">

      <div class="card shadow" style="width: 18rem;">
        <img src="fotos/FilosofiaAntiga.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Filosofia Antiga
            <span class="badge rounded-pill border bg-light text-primary">95%</span>
          </h5>
          <p class="card-text">Descrição da Trilha</p>
          <a href="FormTrilha.php" class="btn btn-primary">Entrar</a>
        </div>
      </div>

    </div>

    <div class="col">

      <div class="card shadow" style="width: 18rem;">
        <img src="fotos/FilosofiaAntiga.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Filosofia Antiga
            <span class="badge rounded-pill border bg-light text-primary">95%</span>
          </h5>
          <p class="card-text">Descrição da Trilha</p>
          <a href="FormTrilha.php" class="btn btn-primary">Entrar</a>
        </div>
      </div>

    </div>

    <div class="col">

      <div class="card shadow" style="width: 18rem;">
        <img src="fotos/FilosofiaAntiga.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Filosofia Antiga
            <span class="badge rounded-pill border bg-light text-primary">95%</span>
          </h5>
          <p class="card-text">Descrição da Trilha</p>
          <a href="FormTrilha.php" class="btn btn-primary">Entrar</a>
        </div>
      </div>

    </div>

    <div class="col">

      <div class="card shadow" style="width: 18rem;">
        <img src="fotos/FilosofiaAntiga.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Filosofia Antiga
            <span class="badge rounded-pill border bg-light text-primary">95%</span>
          </h5>
          <p class="card-text">Descrição da Trilha</p>
          <a href="FormTrilha.php" class="btn btn-primary">Entrar</a>
        </div>
      </div>

    </div>

    <div class="col">

      <div class="card shadow" style="width: 18rem;">
        <img src="fotos/FilosofiaAntiga.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Filosofia Antiga
            <span class="badge rounded-pill border bg-light text-primary">95%</span>
          </h5>
          <p class="card-text">Descrição da Trilha</p>
          <a href="FormTrilha.php" class="btn btn-primary">Entrar</a>
        </div>
      </div>

    </div>
  </div>
    <?php require_once("Rodape.php") ?>