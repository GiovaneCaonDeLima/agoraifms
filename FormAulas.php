<?php require_once("Cabeçalho.php") ?>
<?php require_once("Conexao.php") ?>
<?php require_once("Protege.php") ?>

<!-- VERIFICAR SE CLICOU EM UM BOTÃO DE EDITAR TRILHA  -->
<?php

    if (isset($_POST['id'])) {   // se existe posição id no vetor $_POST
        $trilha_selecionada = $_POST['id'];     // arquivo foi chamado pelo form da listagem
    } else {
        header('location: FormTrilha.php');  // arquivo não foi chamado pelo form da listagem
    }
    ?>
    <!-- FIM DA VERIFICAÇÃO  -->

    <!-- PEGAR CONTEÚDO DA TRILHA  -->
    <?php
    $sql = 'select * from aulas where id_trilha = ? order by posicao'; // seleciona os registros desta trilha
    $sqlprep = $conexao->prepare($sql);
    $sqlprep->bind_param("i", $trilha_selecionada);
    $sqlprep->execute();
    $resultadoSql = $sqlprep->get_result(); // pega o resultado do sql
    $vetorLista = $resultadoSql->fetch_assoc();


    ?>

<br>

<!-- TÍTULO EM DESTAQUE NA PÁGINA  -->
<div class="row shadow-lg rounded-pill align-items-center">
    <div class="col-10">
        <h1 class="p-3"><strong>Editar Aulas</strong></h1>
    </div>
    <div class="col-2">
        <a role="button" class="btn text-primary" href="FormLogin.php"><strong>Salvar</strong></a>
        <a role="button" class="btn btn-primary" href="FormTrilha.php"><strong>Voltar</strong></a>
    </div>
</div><br><br>

<div class="row container">

    <!-- MENU AULAS  -->
    <div class="col">
        <div class="card" style="width: 18rem;">
            <div class="card-header text-center">
                <h5>Aulas</h5>
            </div>
            <div class="card-body">

                <?php foreach ($vetorLista as $Registro) :?>
                <div class="row my-3">
                    <form action="salvarAulas.php" method="post">
                        <div class="btn-group">
                            <button class="btn btn-primary">+</button>
                            <button class="btn"><strong><?=  $Registro["titulo"]; ?></strong></button>
                            <button class="btn btn-primary">-</button>
                            <button class="btn btn-danger">Remover</button>
                        </div>
                    </form>
                </div>

                <?php endforeach ?>

                <div class="row my-3">
                    <hr>
                    <form action="salvarAulas.php" method="post">
                        <input type="text" class="form-control" name="titulo" placeholder="Título da Aula">
                        <input type="hidden" name="trilha_selecionada" value="<?= $trilha_selecionada ?>">
                        <button type="submit" class="btn btn-success my-3">Salvar</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- MENU SEÇÕES DA AULA  -->
    <div class="col">
        <div class="card" style="width: 20rem;">
            <div class="card-header text-center">
                <h5>Seções da Aula (Nº)</h5>
            </div>
            <div class="card-body">

                <div class="row my-3">
                    <form action="salvarAulas.php" method="post">
                        <div class="btn-group">
                            <button class="btn btn-primary">+</button>
                            <button class="btn"><strong>Título</strong></button>
                            <button class="btn btn-primary">-</button>
                            <button class="btn btn-danger">Remover</button>
                        </div>
                    </form>
                </div>

                <div class="row my-3">
                    <hr>
                    <form action="salvarAulas.php" method="post">
                        <div class="dropdown">
                            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Novo Elemento
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Título</a></li>
                                <li><a class="dropdown-item" href="#">Parágrafo</a></li>
                                <li><a class="dropdown-item" href="#">Link</a></li>
                                <li><a class="dropdown-item" href="#">Código</a></li>
                            </ul>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- MENU EDITAR SEÇÃO  -->
    <div class="col">
        <div class="card">
            <div class="card-header text-center">
                <h5>Editar Seção "Tipo"</h5>
            </div>
            <div class="card-body">

                <div class="row my-3">
                    <form action="salvarAulas.php" method="post">
                        <textarea name="" id="" cols="30" rows="7" class="form-control"></textarea>
                    </form>
                </div>

                <div class="row my-3">
                    <hr>
                    <form action="salvarAulas.php" method="post">
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

</div><br>

<div class="row">
    <hr>


    <!-- Pré Visualização da aula na trilha  -->
    <div>
        <h3 class="text-center p-1"><strong>Prévia da Seção</strong></h3>
    </div><br><br><br>
    <hr><br><br>













    <!-- PRÉVIA DA SEÇÃO  -->

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
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/1yuL7jcxMzg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br><br><br>

                        <!-- Botão marcar como concluído  -->
                        <a href="FormTrilha.php" class="btn btn-secondary">Marcar como concluído</a>

                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- FIM PRÉVIA DA SEÇÃO  -->





    <?php require_once("Rodape.php") ?>