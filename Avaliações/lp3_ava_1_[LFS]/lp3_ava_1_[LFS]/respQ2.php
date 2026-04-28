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
</body>

</html>