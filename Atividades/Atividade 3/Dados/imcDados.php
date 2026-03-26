<?php
$peso = $_POST["numberPeso"];
$altura = $_POST["numberAltura"];

$imc = $peso / ($altura * $altura);

$estado = "";

if ($imc <= 18.5) {
    $estado = "Abaixo do peso";
} elseif ($imc <= 25) {
    $estado = "Peso ideal";
} else if ($imc <= 30) {
    $estado = "Sobrepeso";
} elseif ($imc <= 40) {
    $estado = "Obesidade";
} else if ($imc > 40) {
    $estado = "Obesidade mórbida";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Calculadora de Índice de Massa Corpórea</h1>
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        IMC
                    </div>
                    <div class="card-body">
                        <figure>
                            <blockquote class="blockquote">
                                <p>
                                    <?php
                                    echo "IMC: $imc<br>$estado";
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