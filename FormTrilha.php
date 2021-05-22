<?php require_once("Cabeçalho.php") ?>
<?php require_once("Protege.php") ?>

<br>

<!-- CARD CRIE OU EDITE UMA TRILHA  -->
<div class="d-flex justify-content-center">
    <div class="card shadow-lg" style="width: 50rem;">
        <div class="card-body">
            <h5 class="card-title text-center">Crie ou edite uma Trilha</h5>
            <br>
            <form class="row g-3">

                <!-- Inputs  -->
                <!-- ID  -->
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">ID da Trilha</label>
                    <input type="text" class="form-control" id="inputEmail4" disabled placeholder="(automático)">
                </div>

                <!-- Foto de capa  -->
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Foto de Capa</label>
                    <input class="form-control" type="file" id="formFile">
                </div>

                <!-- Título da trilha  -->
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Título da Trilha</label>
                    <input type="text" class="form-control" id="inputAddress">
                </div>

                <!-- Descrição  -->
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Descrição</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Breve Descrição (Máx. 100 caracteres)"></textarea>
                </div>

                <!-- Nº de aulas dropdown  -->
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Nº de Aulas (Partes)</label>
                    <select id="inputState" class="form-select">
                        <option selected>Selecionar</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                    </select>
                </div>

                <!-- Pontos por aula  -->
                <div class="col-md-8">
                    <label for="customRange2" class="form-label container">Pontos por aula</label><br>
                    <form>
                        <input class="container" type="range" name="amountRange" min="5" max="15" value="0" oninput="this.form.amountInput.value=this.value" />
                        <input class="container" type="number" name="amountInput" min="5" max="15" value="0" oninput="this.form.amountRange.value=this.value" />
                    </form>
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

<!-- Tabela trilhas criadas  -->
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
        </tr>
    </thead>

    <!-- Corpo da tabela  -->
    <tbody>

        <!-- Linha 1 -->
        <tr>
            <th>5</th>
            <td colspan="3">
                <p class="text-left">Nome Trilha 1</p>
            </td>
            <td><a role="button" class="btn btn-success" href="FormAulas.php"><strong>Editar Aulas</strong></a>
                <a role="button" class="btn btn-primary" href="FormLogin.php"><strong>Configurações</strong></a>
                <a role="button" class="btn btn-danger" href="FormLogin.php"><strong>Remover</strong></a>
            </td>
            <td>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Visível</label>
                </div>
            </td>
        </tr>

        <!-- Linha 2  -->
        <tr>
            <th>5</th>
            <td colspan="3">
                <p class="text-left">Nome Trilha 2</p>
            </td>
            <td><a role="button" class="btn btn-success" href="FormAulas.php"><strong>Editar Aulas</strong></a>
                <a role="button" class="btn btn-primary" href="FormLogin.php"><strong>Configurações</strong></a>
                <a role="button" class="btn btn-danger" href="FormLogin.php"><strong>Remover</strong></a>
            </td>
            <td>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Visível</label>
                </div>
            </td>
        </tr>

        <!-- Linha 3  -->
        <tr>
            <th>5</th>
            <td colspan="3">
                <p class="text-left">Nome Trilha 3</p>
            </td>
            <td><a role="button" class="btn btn-success" href="FormAulas.php"><strong>Editar Aulas</strong></a>
                <a role="button" class="btn btn-primary" href="FormLogin.php"><strong>Configurações</strong></a>
                <a role="button" class="btn btn-danger" href="FormLogin.php"><strong>Remover</strong></a>
            </td>
            <td>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Visível</label>
                </div>
            </td>
        </tr>

        <!-- Linha 4  -->
        <tr>
            <th>5</th>
            <td colspan="3">
                <p class="text-left">Nome Trilha 4</p>
            </td>
            <td><a role="button" class="btn btn-success" href="FormAulas.php"><strong>Editar Aulas</strong></a>
                <a role="button" class="btn btn-primary" href="FormLogin.php"><strong>Configurações</strong></a>
                <a role="button" class="btn btn-danger" href="FormLogin.php"><strong>Remover</strong></a>
            </td>
            <td>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Visível</label>
                </div>
            </td>
        </tr>

        <!-- Linha 5  -->
        <tr>
            <th>5</th>
            <td colspan="3">
                <p class="text-left">Nome Trilha 5</p>
            </td>
            <td><a role="button" class="btn btn-success" href="FormAulas.php"><strong>Editar Aulas</strong></a>
                <a role="button" class="btn btn-primary" href="FormLogin.php"><strong>Configurações</strong></a>
                <a role="button" class="btn btn-danger" href="FormLogin.php"><strong>Remover</strong></a>
            </td>
            <td>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Visível</label>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<?php require_once("Rodape.php") ?>