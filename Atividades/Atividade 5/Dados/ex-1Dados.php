<?php
$add = $_POST["adicionais"];
$valor = 0;
$nome = $_POST["txtNome"];

for ($i = 0; $i < count($add); $i++) {
    if ($add[$i] == "bacon")
        $valor += 3;

    if ($add[$i] == "cheddar")
        $valor += 2.5;

    if ($add[$i] == "cebola")
        $valor += 2;

    if ($add[$i] == "ham")
        $valor += 5;
}

$valor += 20;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Pedidos com Adicionais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="card" style="width: 18rem;">
        <div class="card-body bg-info mb-3 position-absolute top-50 start-50 transalate-middle">
            <h5 class="card-title">Olá <?php echo $nome; ?> </h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">Seu pedido ficou <?php echo $valor; ?>R$</h6>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>