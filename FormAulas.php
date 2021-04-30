<?php require_once("Cabeçalho.php") ?>

<br>

<!-- TÍTULO EM DESTAQUE NA PÁGINA  -->
<div class="shadow-lg rounded-pill">
    <h1 class="text-center p-3"><strong>Edição de Aulas</strong></h1>
    <a role="button" class="btn" href="FormLogin.php"><strong>Salvar</strong></a>
    <a role="button" class="btn btn-primary" href="FormTrilha.php"><strong>Voltar</strong></a>
</div><br>


<div class="row">

    <!-- Lado Esquerdo -->
    <div class="col p-3">

        <!-- Cartão Escolher aula e tópico para editar -->
        <div class="card shadow-lg" style="width: 35rem;">
            <div class="card-body">
                <h5 class="card-title text-center">Escolha a aula</h5>

                <!-- Cabeçalho -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Escolha a Aula</th>
                            <th scope="col">Escolha o Tópico</th>
                        </tr>
                    </thead>
                    <!-- Corpo  -->
                    <tbody>

                        <!-- Linha 1  -->
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Aula 1
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Tópico 1
                                    </label>
                                </div>
                            </td>
                        </tr>

                        <!-- Linha 2  -->
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Aula 2
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Tópico 2
                                    </label>
                                </div>
                            </td>
                        </tr>

                        <!-- Linha 3  -->
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Aula 3
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Tópico 3
                                    </label>
                                </div>
                            </td>
                        </tr>

                        <!-- Linha 4 -->
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Aula 4
                                    </label>
                                </div>
                            </td>
                        </tr>

                        <!-- Linha 5  -->
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Aula 5
                                    </label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
        <!-- Fim Lado Esquerdo  -->
        <!-- Futuramente alterar para que esse menu seja construido em um for, e não manualmente  -->


        <!-- Lado Direito  -->
        <div class="col p-3">

            <!-- Cartão Editar Tópico  -->
            <div class="card shadow-lg" style="width: 35rem;">
                <div class="card-body">
                    <h5 class="card-title text-center">Editar tópico</h5>

                    <!-- Formulário -->
                    <form class="row">

                        <!-- Inputs  -->
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Título</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Conteúdo</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Insira o conteúdo em texto deste tópico aqui"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Anexo 1</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Anexo 2</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <br><br><br><br>

                        <!-- Botões  -->
                        <div class="mb-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary" style="width: 150px;">Visualizar</button>
                            <button type="submit" class="btn btn-primary" style="width: 150px;">Publicar</button>
                        </div>
                        <div class="mb-3 d-flex justify-content-center">

                        </div>
                    </form>

                </div>

            </div>

        </div>
        <!-- Fim lado direito  -->

        <!-- Pré Visualização da aula na trilha  -->
        <div>
            <h3 class="text-center p-3"><strong>Pré-Visualização</strong></h3>
        </div><br>

        <?php require_once("Rodape.php") ?>