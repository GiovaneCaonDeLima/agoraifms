<?php require_once("Cabeçalho.php") ?>

<!-- Dividir a tela em 2 partes horizontalmente -->
<div class="row">

    <!-- Lado Esquerdo (Fazer Login) -->
    <div class="col p-3">

        <!-- Cartão  -->
        <div class="card shadow-lg" style="width: 35rem;">
            <div class="card-body">

            <?php
                // Se retornou com erroLogin na sessão é porque o login falhou 
                if (isset($_SESSION["erroLogin"])) :
                ?>

                    <div class="bg-danger text-light border-rounded rounded-pill text-center"
                    style="width: 13rem;">
                        <small class="fw-bold"><?= $_SESSION["erroLogin"]; ?></small>
                    </div>

                <?php

                    // Retirar o erroLogin da sessão para que tente novamente 
                    unset($_SESSION["erroLogin"]);
                endif
                ?>

                <h5 class="card-title text-center">Fazer Login</h5>                

                <!-- Formulário Login -->
                <form action="Login.php" method="POST" class="row">

                    <!-- Checks radios -->
                    <div class="d-inline text-center">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="perfil" id="perfil" value="aluno" checked>
                            <label class="form-check-label" for="inlineRadio1">Aluno</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="perfil" id="perfil" value="professor">
                            <label class="form-check-label" for="inlineRadio2">Professor</label>
                        </div>
                    </div>



                    <!-- Inputs  -->
                    <div class="mb-3 form-group">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" id="email">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" name="senha" id="senha">
                    </div>

                    <!-- Botão  -->
                    <div class="mb-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary" style="width: 150px;">Entrar</button>
                    </div>
                </form>
            </div>

        </div>

    </div>


    <!-- Lado Direito  (Crie uma conta) -->
    <div class="col p-3">

        <!-- Cartão -->
        <div class="card shadow-lg" style="width: 35rem;">
            <div class="card-body">
                <h5 class="card-title text-center">Crie uma conta</h5>

                <!-- Formulário Cadastre-se  -->
                <form class="row" action="salvarUsuario.php" method="POST">

                    <!-- Checks  -->
                    <div class="d-inline text-center">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="perfil" id="perfil" value="aluno" checked>
                            <label class="form-check-label" for="inlineRadio1">Aluno</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="perfil" id="perfil" value="professor">
                            <label class="form-check-label" for="inlineRadio2">Professor</label>
                        </div>
                    </div>

                    <!-- Inputs  -->
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" name="nome" id="nome" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">E-mail</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Senha</label>
                        <input type="password" class="form-control" name="senha" id="senha">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Confirme a senha</label>
                        <input type="password" class="form-control" name="senha2" id="senha2">
                    </div>

                    <!-- Botão  -->
                    <div class="mb-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary" style="width: 150px;">Cadastre-se</button>
                    </div>
                </form>

            </div>

        </div>

    </div>

    <?php require_once("Rodape.php") ?>