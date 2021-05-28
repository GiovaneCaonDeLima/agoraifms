<?php require_once('Cabeçalho.php'); ?>
<?php require_once('Conexao.php'); ?>

<?php
// ATUALIZAR OS DADOS PERFIL, PARA SEREM GERADOS NOVAMENTE DEPOIS
require_once('Conexao.php');
$comando_sql = "select * from usuario order by email";         //instrucao sql para todos os alunos
$dadosSql = $conexao->query($comando_sql);               //executa instrucao sql e salva o resultado do sql
$vetorLista = $dadosSql->fetch_all(MYSQLI_ASSOC); // pega todos os registros e coloca em um vetor de registros

// var_dump($Lista)

// foreach ($vetorLista as $Registro) :
// $id = $Registro["id"];
// $nome = $Registro["nome"];
// $email = $Registro["email"];
// $senha = $Registro["senha"];
// endforeach
?>

<div class="row">

    <div class="col">
        <div class="card shadow-lg">

            <div class="card-body">
                <h3 class="card-header text-center rounded-pill"> Minha Conta</h5>

                    <!-- MSG DE STATUS  -->
                    <?php if (isset($_GET["msg"])) :
                        if($_GET['msg'] == "1"){
                            echo '<h5 class="bg-success container rounded text-light text-center p-1">
                            Cadastro atualizado com sucesso</h5>';}
                        else {
                            echo '<h5 class="bg-danger container rounded text-light text-center p-1">
                            Senhas diferentes</h5>';}
                    endif
                    ?>

                    <div class="row">

                        <!-- FOTO (lado esquerdo) -->
                        <div class="col-4 p-3">

                            <div class="card">

                                <!-- FOTO E TÍTULO  -->
                                <div class="cart-header">
                                    <img class="img-fluid rounded-circle p-4" style="width: 500px; height: 400px;" 
                                    src="fotos/240520211626FilosofiaAntiga.jpg" alt="">
                                    <h5 class="text-center p-1">Foto de Perfil</h5>
                                </div>

                                <div class="card-body">
                                    <!-- FORM ALTERAR FOTO  -->
                                    <form action="alterarConta.php" method="post">
                                        <div class="col d-grid gap-3 p-3">

                                            <!-- INPUT FOTO  -->
                                            <div class="row">
                                                <input type="file" name="foto" id="foto" class="form-control">
                                            </div>

                                            <!-- BOTÃO  -->
                                            <div class="row">
                                                <button type="submit" 
                                                class="px-4 btn btn-success position-relative top-50 
                                                start-50 translate-middle">Alterar</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- FIM FORM ALTERAR FOTO  -->
                                </div>

                            </div>
                        </div>
                        <!-- FIM FOTO (lado esquerdo)  -->

                        <!-- DADOS (lado direito) -->
                        <div class="col-8 p-3 d-flex justify-content-center">

                            <div class="card container">
                                <!-- TÍTULO  -->
                                <div class="card-header text-center">Nome</div>

                                <!-- FORM ALTERAR NOME  -->
                                <form action="alterarConta.php" class="container p-3" method="post">
                                    <div class="col d-grid gap-3 p-3">

                                        <div class="row text-center">
                                            <label for="">
                                                <h5>Giovane Caon de Lima</h5>
                                            </label>
                                        </div>

                                        <div class="row">
                                            <div class="col d-grid gap-3">
                                                <!-- INPUT NOVO NOME  -->
                                                <div class="row container ">
                                                    <input type="text" name="nome" id="nome" 
                                                    class="form-control p-2 mx-auto" 
                                                    placeholder="Novo nome" style="width: 25rem;">
                                                </div>
                                                <!-- BOTÃO ALTERAR NOME  -->
                                                <div class="row mx-auto">
                                                    <button type="submit" class="px-4 btn btn-success">Alterar</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                                <!-- FIM FORM ALTERAR NOME  -->

                                <!-- TÍTULO  -->
                                <div class="card-header text-center">E-mail</div>

                                <!-- FORM ALTERAR EMAIL  -->
                                <form action="alterarConta.php" class="container p-3" method="post">
                                    <div class="col d-grid gap-3 p-3">

                                        <div class="row text-center">
                                            <label for="">
                                                <h5>giovane@gmail.com</h5>
                                            </label>
                                        </div>

                                        <div class="row">
                                            <div class="col d-grid gap-3">
                                                <!-- INPUT NOVO EMAIL  -->
                                                <div class="row container">
                                                    <input type="text" name="email" id="email" 
                                                    class="form-control p-2 mx-auto" placeholder="Novo email" 
                                                    style="width: 25rem;">
                                                </div>
                                                <!-- BOTÃO ALTERAR EMAIL  -->
                                                <div class="row mx-auto">
                                                    <button type="submit" class="px-4 btn btn-success">Alterar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- FIM FORM ALTERAR EMAIL  -->

                                <!-- TÍTULO  -->
                                <div class="card-header text-center">Senha</div>

                                <!-- FORM ALTERAR SENHA  -->
                                <form action="alterarConta.php" class="container p-3" method="post">
                                    <div class="col d-grid gap-3 p-3">

                                        <div class="row text-center">
                                            <label for="">
                                                <h5>123</h5>
                                            </label>
                                        </div>
                                        <div class="row">

                                            <div class="col d-grid gap-3">
                                                <!-- INPUT ALTERAR SENHA  -->
                                                <div class="row container">
                                                    <input type="text" name="senha" id="senha" 
                                                    class="form-control p-2 mx-auto" placeholder="Nova senha" 
                                                    style="width: 25rem;">
                                                </div>
                                                <!-- INPUT CONFIRMAR SENHA  -->
                                                <div class="row container">
                                                    <input type="text" name="senha2" id="senha2" 
                                                    class="form-control p-2 mx-auto" placeholder="Confirme a senha" 
                                                    style="width: 25rem;">
                                                </div>
                                                <!-- BOTÃO ALTERAR SENHA  -->
                                                <div class="row mx-auto">
                                                    <button type="submit" class="px-4 btn btn-success">Alterar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- FIM FORM ALTERAR SENHA  -->

                            </div>
                        </div> <!-- FIM DADOS (lado direito) -->
                    </div>
            </div>
        </div>
    </div>
</div>
<?php require_once("Rodape.php") ?>