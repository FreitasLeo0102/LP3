<?php ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3>Cadastro para Maratona de Programação</h3>

                <form action="Dados/Q1.php" method="POST">
                    <div class="mb-3">
                        <label for="campoNome" class="form-label">Nome Completo:</label>
                        <input type="text" class="form-control" id="campoNome" name="txtNome">
                    </div>
                    <div class="mb-3">
                        <label for="campoEmail" class="form-label">E-mail:</label>
                        <input type="text" class="form-control" id="campoEmail" name="txtEmail">
                    </div>
                    <select class="form-select form-select-lg mb-3" aria-label="Large select example" name="categoria">
                        <option selected>Categoria de Participação:</option>
                        <option value="Iniciante">Iniciante</option>
                        <option value="Intermediário">Intermediário</option>
                        <option value="Avançado">Avançado</option>
                    </select>

                    <label for="">Linguagem Principal: </label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioLinguagem" id="radioCamisetaP" value="python">
                        <label class="form-check-label" for="radioLinguagemPython">
                            Python
                        </label>
                    </div>
                    <div class="form-check">

                        <input class="form-check-input" type="radio" name="radioLinguagem" id="radioCamisetaM" value="java">
                        <label class="form-check-label" for="radioLinguagemJava">
                            Java
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioLinguagem" id="radioCamisetaG" value="php">
                        <label class="form-check-label" for="radioLinguagemPHP">
                            PHP
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioLinguagem" id="radioCamisetaGG"
                            value="c++">
                        <label class="form-check-label" for="radioLinguagemC++">
                            C++
                        </label>
                    </div>

                    <br>
                    <label for="">Áreas de Interesse:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Desenvolvimento Web"
                            id="checkDefault" name="areas[]">
                        <label class="form-check-label" for="checkDefault">
                            Desenvolvimento Web
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Inteligência Artificial"
                            id="checkDefault" name="areas[]">
                        <label class="form-check-label" for="checkDefault">
                            Inteligência Artificial
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Banco de Dados" id="checkDefault"
                            name="areas[]">
                        <label class="form-check-label" for="checkDefault">
                            Banco de Dados
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Segurança da Informação" id="checkDefault"
                            name="areas[]">
                        <label class="form-check-label" for="checkDefault">
                            Segurança da Informação
                        </label>
                    </div>

                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar campos</button>
                </form>
                </form>
            </div>

            <div class="col-6">
                <h3>Sistema de Consulta de Linguagens de Programação</h3>

                <form action="Dados/Q2.php" method="GET">
                <div class="mb-3">
                    <label for="campoBusca" class="form-label">Campo de busca:</label>
                    <input type="text" class="form-control" id="campoBusca" name="txtBusca">
                </div>

                <button type="submit" class="btn btn-success">Pesquisar</button>
            </form>
            </div>
        </div>
    </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>