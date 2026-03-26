<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades 4</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <h1 class="text-center">Atividades 4</h1>

        <div class="row">
            <div class="col-4">

                <h3>Sistema de Aprovação Escolar</h3>

                <form method="POST">

                    <input type="hidden" name="formulario" value="notas">

                    <div class="mb-3">
                        <label class="form-label">Digite a nota 01 (0 a 10):</label>
                        <input type="number" step="any" class="form-control" name="numberNota1">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Digite a nota 02 (0 a 10):</label>
                        <input type="number" step="any" class="form-control" name="numberNota2">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Digite a nota 03 (0 a 10):</label>
                        <input type="number" step="any" class="form-control" name="numberNota3">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Qual o percentual de frequência (%):</label>
                        <input type="number" step="any" class="form-control" name="numberFreq">
                    </div>

                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar</button>

                </form>

                <?php

                $mostrarNotas = false;

                if ($_SERVER["REQUEST_METHOD"] == "POST" && ($_POST["formulario"] ?? "") == "notas") {

                    $nota1 = $_POST["numberNota1"] ?? 0;
                    $nota2 = $_POST["numberNota2"] ?? 0;
                    $nota3 = $_POST["numberNota3"] ?? 0;
                    $freq = $_POST["numberFreq"] ?? 0;

                    $media = ($nota1 + $nota2 + $nota3) / 3;

                    if ($freq < 75) {
                        $estado = "Reprovado por frequência";
                        $alert = "danger";
                    } elseif ($media >= 7) {
                        $estado = "Aprovado";
                        $alert = "success";
                    } elseif ($media >= 4) {
                        $estado = "Recuperação";
                        $alert = "warning";
                    } else {
                        $estado = "Reprovado por nota";
                        $alert = "danger";
                    }

                    $mostrarNotas = true;

                }

                if ($mostrarNotas) {
                    ?>

                    <div class="alert alert-<?php echo $alert; ?>">
                        <?php echo $estado; ?>
                    </div>

                <?php } ?>

            </div>


            <div class="col-4">

                <h3>Calculadora de Tarifas de Energia</h3>

                <form method="POST">

                    <input type="hidden" name="formulario" value="energia">

                    <div class="mb-3">
                        <label class="form-label">Consumo de kWh no mês:</label>
                        <input type="number" step="any" class="form-control" name="numberKwh">
                    </div>

                    <label class="form-label">Tipo de instalação</label>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tipoInstalacao" value="residencial">
                        <label class="form-check-label">Residencial</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tipoInstalacao" value="comercial">
                        <label class="form-check-label">Comercial</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tipoInstalacao" value="industrial">
                        <label class="form-check-label">Industrial</label>
                    </div>

                    <button type="submit" class="btn btn-success mt-2">Enviar</button>
                    <button type="reset" class="btn btn-warning mt-2">Limpar</button>

                </form>

                <?php

                $mostrarEnergia = false;

                if ($_SERVER["REQUEST_METHOD"] == "POST" && ($_POST["formulario"] ?? "") == "energia") {

                    $kwh = $_POST["numberKwh"] ?? 0;
                    $tipo = $_POST["tipoInstalacao"] ?? "";

                    $consumo = 0;

                    if ($tipo == "residencial") {
                        if ($kwh <= 500)
                            $consumo = 0.4 * $kwh;
                        else
                            $consumo = 0.65 * $kwh;
                    } elseif ($tipo == "comercial") {
                        if ($kwh <= 1000)
                            $consumo = 0.55 * $kwh;
                        else
                            $consumo = 0.60 * $kwh;
                    } elseif ($tipo == "industrial") {
                        if ($kwh <= 5000)
                            $consumo = 0.55 * $kwh;
                        else
                            $consumo = 0.60 * $kwh;
                    }

                    $mostrarEnergia = true;

                }

                if ($mostrarEnergia) {
                    ?>

                    <div class="alert alert-info mt-3">
                        Valor da conta: R$ <?php echo number_format($consumo, 2, ",", "."); ?>
                    </div>

                <?php } ?>

            </div>


            <div class="col-4">

                <h3>Sistema de Descontos E-commerce</h3>

                <form method="POST">

                    <input type="hidden" name="formulario" value="ecommerce">

                    <div class="mb-3">
                        <label class="form-label">Preço da compra:</label>
                        <input type="number" step="any" class="form-control" name="numberPreco">
                    </div>

                    <label class="form-label">Categoria do cliente</label>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="categoria" value="comum">
                        <label class="form-check-label">Cliente Comum</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="categoria" value="vip">
                        <label class="form-check-label">Cliente VIP</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="categoria" value="premium">
                        <label class="form-check-label">Cliente Premium</label>
                    </div>

                    <button type="submit" class="btn btn-success mt-2">Enviar</button>
                    <button type="reset" class="btn btn-warning mt-2">Limpar</button>

                </form>

                <?php

                $mostrarEcommerce = false;

                if ($_SERVER["REQUEST_METHOD"] == "POST" && ($_POST["formulario"] ?? "") == "ecommerce") {

                    $preco = $_POST["numberPreco"] ?? 0;
                    $categoria = $_POST["categoria"] ?? "";

                    $desconto = 0;
                    $freteGratis = false;

                    if ($categoria == "comum") {
                        if ($preco >= 500)
                            $desconto = 0.05;
                    } elseif ($categoria == "vip") {
                        $desconto = 0.10;

                        if ($preco >= 1000)
                            $freteGratis = true;
                    } elseif ($categoria == "premium") {
                        $desconto = 0.15;
                        $freteGratis = true;
                    }

                    $valorFinal = $preco - ($preco * $desconto);

                    $mostrarEcommerce = true;

                }

                if ($mostrarEcommerce) {
                    ?>

                    <div class="alert alert-info mt-3">

                        Valor original: R$ <?php echo number_format($preco, 2, ",", "."); ?> <br>

                        Desconto: <?php echo $desconto * 100; ?>% <br>

                        Valor final: R$ <?php echo number_format($valorFinal, 2, ",", "."); ?> <br>

                        <?php
                        if ($freteGratis)
                            echo "Frete grátis";
                        ?>

                    </div>

                <?php } ?>

            </div>

        </div>
    </div>

</body>

</html>