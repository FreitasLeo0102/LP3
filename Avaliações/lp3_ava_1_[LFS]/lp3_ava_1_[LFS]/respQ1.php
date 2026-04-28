<?php
$nome = $_POST["txtNome"];
$email = $_POST["txtEmail"];
$perfil = $_POST["perfil"];
$camiseta = $_POST["radioCamiseta"];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação 1 - Q1</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <?php
                if (isset($_POST["workshops"])) {
                    $work = $_POST["workshops"];
                    ?>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Olá <?php echo $nome; ?></h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Email: <?php echo $email; ?><br>Perfil:
                                <?php echo $perfil; ?>
                            </h6>
                            <p class="card-text">Voce escolheu a camiseta de tamanho <?php echo $camiseta; ?><br>E se
                                inscreveu
                                nos seguintes worksshops:</p>
                            <ul>
                                <?php
                                for ($i = 0; $i < count($work); $i++) {
                                    echo "<li>" . $work[$i] . "</li>";
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
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>