<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <h1 class="text-center">Atividade 5</h1>
            <div class="col-6">
                <h3 class="text-center">Sistema de Pedidos com Adicionais</h3>
                <form action="Dados/ex-1Dados.php" method="POST">
                    <div class="mb-3">
                        <label for="campoNome" class="form-label">Qual seu nome:</label>
                        <input type="text" class="form-control" id="campoNome" name="txtNome">
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="bacon" id="checkDefault"
                            name="adicionais[]">
                        <label class="form-check-label" for="checkDefault">
                            Bacon: R$ 3,00
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="cheddar" id="checkDefault"
                            name="adicionais[]">
                        <label class="form-check-label" for="checkChecked">
                            Cheddar Cremoso: R$ 2,50
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="cebola" id="checkDefault"
                            name="adicionais[]">
                        <label class="form-check-label" for="checkChecked">
                            Cebola Caramelizada: R$ 2,00
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="ham" id="checkDefault"
                            name="adicionais[]">
                        <label class="form-check-label" for="checkChecked">
                            Hambúrguer Extra: R$ 5,00
                        </label>
                    </div>

                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar campos</button>
                </form>
            </div>

            <div class="col-6">
                <h3>Gerador de Tabuada Dinâmica</h3>

                <form action="Dados/ex-2Dados.php" method="GET">
                    <div class="mb-3">
                        <label for="campoNumero" class="form-label">Digite um numero (1 a 50):</label>
                        <input type="number" class="form-control" id="campoNumber" name="number">
                    </div>

                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar campos</button>
                </form>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>