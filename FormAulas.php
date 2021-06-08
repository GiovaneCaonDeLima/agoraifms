<?php require_once("Cabeçalho.php") ?>
<?php require_once("Protege.php") ?>

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

                <div class="row my-3">
                    <form action="">
                        <div class="btn-group">
                            <button class="btn btn-primary">+</button>
                            <button class="btn"><strong>Aula 01</strong></button>
                            <button class="btn btn-primary">-</button>
                            <button class="btn btn-danger">Remover</button>
                        </div>
                    </form>
                </div>

                <div class="row my-3">
                    <form action="">
                        <div class="btn-group">
                            <button class="btn btn-primary">+</button>
                            <button class="btn"><strong>Aula 02</strong></button>
                            <button class="btn btn-primary">-</button>
                            <button class="btn btn-danger">Remover</button>
                        </div>
                    </form>
                </div>

                <div class="row my-3">
                    <form action="">
                        <div class="btn-group">
                            <button class="btn btn-primary">+</button>
                            <button class="btn"><strong>Aula 03</strong></button>
                            <button class="btn btn-primary">-</button>
                            <button class="btn btn-danger">Remover</button>
                        </div>
                    </form>
                </div>

                <div class="row my-3">
                    <hr>
                    <form action="">
                        <button type="submit" class="btn btn-success">Criar Aula</button>
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
                    <form action="">
                        <div class="btn-group">
                            <button class="btn btn-primary">+</button>
                            <button class="btn"><strong>Título</strong></button>
                            <button class="btn btn-primary">-</button>
                            <button class="btn btn-danger">Remover</button>
                        </div>
                    </form>
                </div>

                <div class="row my-3">
                    <form action="">
                        <div class="btn-group">
                            <button class="btn btn-primary">+</button>
                            <button class="btn"><strong>Parágrafo</strong></button>
                            <button class="btn btn-primary">-</button>
                            <button class="btn btn-danger">Remover</button>
                        </div>
                    </form>
                </div>

                <div class="row my-3">
                    <form action="">
                        <div class="btn-group">
                            <button class="btn btn-primary">+</button>
                            <button class="btn"><strong>Anexo</strong></button>
                            <button class="btn btn-primary">-</button>
                            <button class="btn btn-danger">Remover</button>
                        </div>
                    </form>
                </div>

                <div class="row my-3">
                    <hr>
                    <form action="">
                        <button type="submit" class="btn btn-success">Novo Elemento</button>
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
                    <form action="">
                        <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                    </form>
                </div>

                <div class="row my-3">
                    <hr>
                    <form action="">
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

</div><br>

<div class="row"><hr>


    <!-- Pré Visualização da aula na trilha  -->
    <div>
        <h3 class="text-center p-1"><strong>Prévia da Seção</strong></h3>
    </div><br><br><br><hr><br><br>

    <?php require_once("Trilha.php") ?>
    <?php require_once("Rodape.php") ?>