<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 4 - Atividades</title>
</head>
<body>
    
    <h1>Atividades</h1>

    <p>1) Ultilizando a estrutura de repetiçãp PARA, faça um algoritimo que mostre na tela a seguinte contagem: <br>-10 -9 -8 -7 -6 -5 -4 -3- 2- 1 0 1 2 3 4 5 6 7 8 9 10</p>

    <?php 
        for($i = -10; $i <=10; $i++) {
            echo "$i ";
        }
    ?>

    <p>2) Desenvolva um algoritimo que efetue a soma de todos os numeros impares que são multiplos de tres e que se encontram no conjunto dos numeros dos numeros de 1 até 500</p>

    <?php 
        $soma = 0;

        for($a = 0; $a <= 500; $a += 3) {
            if ($a % 2 == 1) {
                $soma += $a;
            }
        }

        echo "$soma ";
    ?>

    <p>3) Desenvolva um programa usando a estrutura de repetição que mostre na tela a seguinte contagem: <br>100 90 80 70 60 50 40 30 20 10 Acabou!</p>

    <?php
        for($c = 100; $c >= 0; $c -= 10) {
            echo "$c ";
        }

        echo "Acabou!";
    ?>

    <p>4) Ultilizando a estrutura de repetição PARA, desenvolva um algoritimo que mostre uma contagem regressiva de 100 até 0, marcando os numeros impares que forem divisiveis por 5, exatamente como mostrado abaixo: <br> 99 97 [95] 93 91 89 87 [85] ... 19 17 [15] 13 11 9 7 [5] 3 1</p>

    <?php
        for($n = 99; $n >= 0; $n -= 2) {
            if($n % 5 == 0 && $n % 2 == 1) {
                echo "[$n] ";
            } else {
                echo "$n ";
            }

        }
    ?>

    <p>5) Ultilizando a estrutura de repetição PARA, desenvolva um programa que mostre na tela a seguinte contagem: <br> 150 145 140 135 130 125 ... 0</p>

    <?php 
        for($j = 150; $j >= 0; $j -= 5) {
            echo "$j ";
        }
    ?>

    <p>Faça a atividade anterior ultilizando a estrutura de repetição ENQUANTO</p>

    <?php 
        $y = 150;

        while ($y >= 0) { 
            echo "$y ";
            $y -= 5;
        }
    ?>
</body>
</html>