<?php
$horas = $_POST["numberHoras"];
$pontos = 0;

if ($horas <= 10) {
    $pontos += 2 * $horas;
} elseif ($horas <= 20) {
    $pontos += 5 * $horas;
} elseif ($horas > 20) {
    $pontos += 10 * $horas;
}

$financeiro = 0.05 * $pontos;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Recompensas do Programa Vida Saudável</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Calculadora de Recompensas do Programa Vida Saudável</h1>
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        Financeiro
                    </div>
                    <div class="card-body">
                        <figure>
                            <blockquote class="blockquote">
                                <p>
                                    <?php echo "$financeiro reais ganhos"; ?>
                                </p>
                            </blockquote>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>