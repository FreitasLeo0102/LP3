<?php ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação 1</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            if (isset($_GET["txtBusca"])) {
                $figura = $_GET["txtBusca"];
                $dados = ["Ada Lovelace", "Alan Turing", "Steve Jobs"];
                $print = "";

                foreach ($dados as $indice) {
                    if ($indice == $figura) {
                        echo "<div class='alert alert-success' role='alert'>
                    Você pesquisou por: " . "$figura" . " Exibindo resultados encontrados...</div>";
                        $print = true;
                    } else {
                        if ($print) {
                        } else {
                            echo "<div class='alert alert-danger' role='alert'>
                    Você pesquisou por: " . "$figura" . " 0 Resultados encontrados</div>";
                    $print = true;
                        }
                    }
                }
                ?>

            <?php } ?>
        </div>
    </div>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>