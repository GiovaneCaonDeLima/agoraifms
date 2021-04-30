<?php require_once('Cabeçalho.php'); ?>

<!-- PÁGINA DE EXIBIÇÃO DO CONTEÚDO DE DETERMINADA TRILHA PARA O USUÁRIO -->

<div class="d-grid gap-3">
  <!-- NAV  -->
  <div class="row">
    <div class="col align-self-center">
      <ul class="nav nav-tabs shadow-sm rounded">
        <li class="nav-item dropdown align-self-center">
          <a class="nav-link" href="TrilhasDeAprendizagem.php" role="button" aria-expanded="false">VOLTAR</a>
        </li>

        <li class="nav-item align-self-center">
          <a class="nav-link" aria-current="page" href="FormTrilha.php">EDITAR</a>
        </li>

        <div class="col-6 align-self-center">
          <h1 class="text-center"><strong> INTRODUÇÃO À FILOSOFIA </strong></h1>
        </div>
      </ul>
    </div>
  </div>


  <br>
  <!-- Cards  -->

  <div class="row row-cols-auto">

    <!-- MENU LATERAL ESQUERDO  -->
    <div class="col-4 col-md-3">

      <div class="card shadow" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title text-center">Menu</h5>

          <!-- LISTA DE AULAS  -->
          <ol class="list-group list-group-numbered">
            <li class="list-group-item d-flex justify-content-between align-items-start">
              <div class="ms-2 me-auto">
                <div class="fw-bold">Aula 1</div>
                A histório da filosofia
              </div>
              <span class="badge bg-primary rounded-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start active">
              <div class="ms-2 me-auto">
                <div class="fw-bold">Aula 2</div>
                Porque estudar filosofia?
              </div>
              <span class="badge bg-info rounded-pill">1</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
              <div class="ms-2 me-auto">
                <div class="fw-bold">Aula 3</div>
                Principais Autores
              </div>
              <span class="badge bg-primary rounded-pill">4</span>
            </li>
          </ol>

        </div>
      </div>

    </div>



    <!-- Lado Direito - Conteúdo da aula selecionada no menu lateral esquerdo  -->
    <div class="col-sm-6 col-md-8">

      <div class="card shadow">
        <div class="card-body">

          <!-- Conteúdo em texto  -->
          <h2 class="card-title">Porque estudar filosofia?</h2><br>
          <p class="card-text">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type
            specimen book.
            It has survived not only five centuries, but also the leap into electronic
            typesetting, remaining essentially unchanged. It was popularised in the
            1960s with the release of Letraset sheets containing Lorem Ipsum passages,
            and more recently with desktop publishing software like Aldus PageMaker
            including versions of Lorem Ipsum.

            <h6>Why do we use it?</h6>
            It is a long established fact that a reader will be distracted by the 
            readable content of a page when looking at its layout. The point of using 
            Lorem Ipsum is that it has a more-or-less normal distribution of letters, 
            as opposed to using 'Content here, content here', making it look like 
            readable English. Many desktop publishing packages and web page editors 
            now use Lorem Ipsum as their default model text, and a search for 
            'lorem ipsum' will uncover many web sites still in their infancy. 
            Various versions have evolved over the years, sometimes by accident, 
            sometimes on purpose (injected humour and the like).
          </p><br>

          <!-- Anexo 1 - video do youtube  -->
          <iframe width="560" height="315" src="https://www.youtube.com/embed/1yuL7jcxMzg" 
          title="YouTube video player" frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
          allowfullscreen></iframe><br><br><br>

            <!-- Botão marcar como concluído  -->
          <a href="FormTrilha.php" class="btn btn-secondary">Marcar como concluído</a>

        </div>
      </div>

    </div>

  </div>
</div>
<?php require_once("Rodape.php") ?>