<?php ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação 1</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <!-- Início do seu código PHP aqui -->
            <div class="col-6">
                <h3>Formulario de Inscrição para Evento Geek</h3>

                <form action="respQ1.php" method="POST">
                    <div class="mb-3">
                        <label for="campoNome" class="form-label">Nome Completo:</label>
                        <input type="text" class="form-control" id="campoNome" name="txtNome">
                    </div>
                    <div class="mb-3">
                        <label for="campoEmail" class="form-label">E-mail:</label>
                        <input type="text" class="form-control" id="campoEmail" name="txtEmail">
                    </div>
                    <select class="form-select form-select-lg mb-3" aria-label="Large select example" name="perfil">
                        <option selected>Perfil do Participante</option>
                        <option value="estudante" name="perfil">Estudante</option>
                        <option value="professor" name="perfil">Professor</option>
                        <option value="competidor" name="perfil">Competidor</option>
                    </select>

                    <label for="">Tamanho da Camiseta do Evento:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioCamiseta" id="radioCamisetaP" value="P">
                        <label class="form-check-label" for="radioCamisetaP">
                            P
                        </label>
                    </div>
                    <div class="form-check">

                        <input class="form-check-input" type="radio" name="radioCamiseta" id="radioCamisetaM" value="M">
                        <label class="form-check-label" for="radioCamisetaM">
                            M
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioCamiseta" id="radioCamisetaG" value="G">
                        <label class="form-check-label" for="radioCamisetaG">
                            G
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioCamiseta" id="radioCamisetaGG"
                            value="GG">
                        <label class="form-check-label" for="radioCamisetaGG">
                            GG
                        </label>
                    </div>

                    <br>
                    <label for="">Workshops de Interesse:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Desenvolvimento com Laravel"
                            id="checkDefault" name="workshops[]">
                        <label class="form-check-label" for="checkDefault">
                            Desenvolvimento com Laravel
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Estilização com bootstrap"
                            id="checkDefault" name="workshops[]">
                        <label class="form-check-label" for="checkDefault">
                            Estilização com bootstrap
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Lógica com JavaScrip" id="checkDefault"
                            name="workshops[]">
                        <label class="form-check-label" for="checkDefault">
                            Lógica com JavaScrip
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Hstória da Computação" id="checkDefault"
                            name="workshops[]">
                        <label class="form-check-label" for="checkDefault">
                            Hstória da Computação
                        </label>
                    </div>

                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar campos</button>
                </form>
                </form>
            </div>

            <div class="col-6">
                <h3>Sistema de Busca de Personalidades Historicas</h3>

                <form action="respQ2.php" method="GET">
                <div class="mb-3">
                    <label for="campoBusca" class="form-label">Campo de busca:</label>
                    <input type="text" class="form-control" id="campoBusca" name="txtBusca">
                </div>

                <button type="submit" class="btn btn-success">Pesquisar</button>
            </form>
            </div>

            



            <!-- Final do seu código PHP aqui -->
        </div>
    </div>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>