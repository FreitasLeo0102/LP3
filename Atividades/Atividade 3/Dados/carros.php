<?php
$tipo = $_POST["tipo"];
$dias = $_POST["numberDias"];
$km = $_POST["numberKm"];

$aluguel = 0;

if ($tipo == "popular") {
    $aluguel += 90 * $dias;

    if ($km <= 100) {
        $aluguel += 0.2 * $km;
    } else {
        $aluguel += 0.1 * $km;
    }
} else {
    $aluguel += 150 * $dias;

    if ($km <= 200) {
        $aluguel += 0.3 * $km;
    } else {
        $aluguel += 0.25 * $km;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Faturamento de Locadora de Veículos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Sistema de Faturamento de Locadora de Veículos</h1>
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        Aluguel
                    </div>
                    <div class="card-body">
                        <figure>
                            <blockquote class="blockquote">
                                <p>
                                    <?php
                                    echo "O valor do aluguel é: $aluguel reais";
                                    ?>
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