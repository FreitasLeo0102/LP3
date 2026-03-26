<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h3>Calculadora de Índice de Massa Corpórea (IMC)</h3>
                <form action="Dados/imcDados.php" method="POST">
                    <div class="mb-3">
                        <label for="campoPeso" class="form-label">Peso (kg):</label>
                        <input type="number" step="any" class="form-control" id="campoPeso" name="numberPeso">
                    </div>

                    <div class="mb-3">
                        <label for="campoAltura" class="form-label">Altura (m):</label>
                        <input type="number" step="any" class="form-control" id="campoAltura" name="numberAltura">
                    </div>

                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar campos</button>
                </form>
            </div>

            <div class="col-4">
                <h3>Sistema de Faturamento de Locadora de Veículos</h3>
                <form action="Dados/carros.php" method="POST">
                    <div class="mb-3">
                        <label for="tipo" class="form-check-label">Tipo do carro: </label>

                        <input type="radio" class="form-check-input" id="tipo" name="tipo" value="popular">
                        <label for="tipo" class="form-check-label">Popular</label>

                        <input type="radio" class="form-check-input" id="tipo" name="tipo" value="luxo">
                        <label for="tipo" class="form-check-label">Luxo</label>
                    </div>

                    <div class="mb-3">
                        <label for="campoDia" class="form-label">Quantidade de dias alugados:</label>
                        <input type="number" step="1" class="form-control" id="campoDia" name="numberDias">
                    </div>

                    <div class="mb-3">
                        <label for="campoKm" class="form-label">Kilometros percorridos:</label>
                        <input type="number" step="any" class="form-control" id="campoDia" name="numberKm">
                    </div>

                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar campos</button>
                </form>
            </div>

             <div class="col-4">
                <h3>Calculadora de Recompensas do Programa Vida Saudável</h3>
                <form action="Dados/VidaSaudavel.php" method="POST">
                    <div class="mb-3">
                        <label for="campoHoras" class="form-label">Quantidade de horas de atividades realizadoas no mês:</label>
                        <input type="number" step="1" class="form-control" id="campoHoras" name="numberHoras">
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