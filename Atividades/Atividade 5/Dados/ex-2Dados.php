<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <?php

    $num = $_GET["number"];

    if (!isset($num) || $num === '') {
        echo '<div class="alert alert-info mt-3">';
        echo 'Digite um número no formulário para ver a tabuada.';
        echo '</div>';
    } else {
        $num = (int) $num;

        echo '<div class="table-responsive mt-3">';
        echo '<table class="table table-striped table-hover">';
        echo '<thead class="table-dark">';
        echo '<tr>';
        echo '<th>Operação</th>';
        echo '<th>Resultado</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        for ($i = 1; $i <= 10; $i++) {
            $resultado = $num * $i;

            echo '<tr>';
            echo "<td>$num x $i</td>";
            echo "<td>$resultado</td>";
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
        echo '</div>';
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>