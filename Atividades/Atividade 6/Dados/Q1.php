<?php
$nome = $_POST["txtNome"];
$email = $_POST["txtEmail"];
$categoria = $_POST["categoria"];
$linguagem = $_POST["radioLinguagem"];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação 1 - Q1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <?php
                if (isset($_POST["areas"])) {
                    $areas = $_POST["areas"];
                    ?>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Olá <?php echo $nome; ?></h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Email: <?php echo $email; ?><br>Categoria:
                                <?php echo $categoria; ?>
                            </h6>
                            <p class="card-text">Voce escolheu a linguagem <?php echo $linguagem; ?><br>E se
                                inscreveu
                                nos seguintes worksshops:</p>
                            <ul>
                                <?php
                                for ($i = 0; $i < count($areas); $i++) {
                                    echo "<li>" . $areas[$i] . "</li>";
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                <?php } else { ?>

                    <div class="alert alert-danger" role="danger">
                        Voce não se inscreveu em nenhum workshop, volte e se inscreva
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>