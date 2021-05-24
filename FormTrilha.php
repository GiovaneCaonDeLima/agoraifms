<?php require_once("Cabeçalho.php") ?>
<?php require_once("Protege.php") //Verificar se o usuário ta logado como professor 
?>
<?php
// ATUALIZAR A LISTA DE TRILHAS CRIADAS E SALVAR NO VETOR, PARA SEREM GERADAS NOVAMENTE DEPOIS
require_once('Conexao.php');
$comando_sql = "select * from trilhas order by id";         //instrucao sql para todos os alunos
$dadosSql = $conexao->query($comando_sql);               //executa instrucao sql e salva o resultado do sql
$vetorLista = $dadosSql->fetch_all(MYSQLI_ASSOC); // pega todos os registros e coloca em um vetor de registros
?>

<br>

<div class="row">

    <!-- VERIFICAR SE CLICOU EM UM BOTÃO DE EDITAR TRILHA  -->
    <?php
    /*
      codigo utilizado para buscar um registro se for atualizar ou deixar o form em branco
      se for inserir
    */

    if (isset($_POST['id'])) {   // se existe posição id no vetor $_POST
        $id = $_POST['id'];     // arquivo foi chamado pelo form da listagem
    } else {
        $id = 0;                // arquivo não foi chamado pelo form da listagem e sim pelo botao novo
    }
    $sql = "select * from trilhas where id=?"; // seleciona o registro pelo id
    $sqlprep = $conexao->prepare($sql);
    $sqlprep->bind_param("i", $id);
    $sqlprep->execute();
    $resultadoSql = $sqlprep->get_result(); // pega o resultado do sql
    $vetorUmRegistro = $resultadoSql->fetch_assoc(); // coloca o primeiro e único registro na variavel

    ?>
    <!-- FIM DA VERIFICAÇÃO  -->

    <div class="col p-3">
        <!-- CARD CRIE OU EDITE UMA TRILHA  -->
        <div class="d-flex">
            <div class="card shadow-lg" style="width: 30rem;">
                <div class="card-body">
                    <h5 class="card-title text-center">Crie ou edite uma Trilha</h5>
                    <br>
                    <form class="row g-3" action="salvarTrilha.php" method="post" enctype="multipart/form-data">

                        <!-- Inputs  -->
                        <!-- ID  -->
                        <div class="col-md-12 form-group">
                            <label for="id" class="form-label">ID da Trilha</label>
                            <input type="text" class="form-control" name="id" placeholder="(automático)" readonly="true" value="<?= $vetorUmRegistro['id']; ?>">
                        </div>

                        <!-- Foto de capa  -->
                        <div class="col-md-12 form-group">
                            <label for="foto" class="form-label">Foto de Capa</label>
                            <input class="form-control" type="file" id="foto" name="foto" value="<?= $vetorUmRegistro['foto']; ?>">
                            <div class="row">
                                <img class="img-responsive" src="<?= $vetorUmRegistro['foto']; ?>">
                                </img>
                            </div>
                        </div>

                        <!-- Título da trilha  -->
                        <div class="col-12 form-group">
                            <label for="titulo" class="form-label">Título da Trilha</label>
                            <input type="text" class="form-control" name="titulo" value="<?= $vetorUmRegistro['titulo']; ?>">
                        </div>

                        <!-- Descrição  -->
                        <div class="col-12 form-group">
                            <label for="descricao" class="form-label">Descrição</label>
                            <textarea class="form-control" name="descricao" rows="2" placeholder="Breve Descrição (Máx. 100 caracteres)" value="<?= $vetorUmRegistro['descricao']; ?>"><?= $vetorUmRegistro['descricao']; ?></textarea>
                        </div>

                        <!-- Salvar  -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                        <small>(Esta trilha não ficará visível no site ainda)</small>
                    </form>
                </div>
            </div>
        </div>
        <!-- FIM CARD CRIE OU EDITE UMA TRILHA -->
    </div>


    <div class="col p-3">
        <!-- Botão para voltar para a home  -->
        <br>
        <div class="container d-flex justify-content-center">
            <a role="button" class="btn btn-dark shadow" href="TrilhasDeAprendizagem.php"><strong>Visualizar Trilhas</strong></a>
        </div>

        <!-- Cabeçalho em destaque  -->
        <br>
        <div class="shadow-lg rounded-pill">
            <h1 class="text-center p-3"><strong>Trilhas Criadas</strong></h1>
        </div><br>

        <!-- Lista trilhas criadas  -->
        <table class="table">
            <!-- Cabeçalho  -->
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Título da Trilha</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>

            <!-- Gerador de Conteúdo da lista  -->
            <tbody>

                <?php foreach ($vetorLista as $Registro) : ?>
                    <tr>
                        <th> <?= $Registro["id"]; ?> </th>
                        <td colspan="3">
                            <p class="text-left"> <?= $Registro["titulo"]; ?> </p>
                        </td>
                        <td>
                            <form action="FormAulas.php" method="post">
                                <input type="hidden" name="id" value="<?= $Registro["id"]; ?>">
                                <button type="submit" class="btn btn-success"><strong>Aulas</strong></button>
                            </form>
                        </td>
                        <td>
                            <form action="FormTrilha.php" method="post">
                                <input type="hidden" name="id" value="<?= $Registro["id"]; ?>">
                                <button type="submit" class="btn btn-primary"><strong>Editar</strong></button>
                            </form>
                        </td>
                        <td>
                            <form action="RemoverTrilha.php" method="post">
                                <input type="hidden" name="id" value="<?= $Registro["id"]; ?>">
                                <button type="submit" class="btn btn-danger"><strong>Remover</strong></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>

            </tbody>

    </div>
</div>

<?php require_once("Rodape.php") ?>