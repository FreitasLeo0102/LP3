<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3 Aula 3</title>
</head>
<body>
    <h1>Aula 3</h1>

    <h3>For</h3>
    <?php
        for($i = 0; $i < 10; $i+=2) {
            echo "$i é par <br>";
        }
    ?>  

    <h3>While</h3>
    <?php
        $i = 1;
        while($i < 10) {
            echo "$i é impar <br>";
            $i+=2;
        }
    ?>
    <h4>Multiplos de 3 entre 0 e 100</h4>
    <ul>
        <?php
            for($l = 0; $l < 100; $l += 3 ) { 
        ?>
        
        <li>Numero: <?= "$l"; ?> </li>
        
        <?php
            }
        ?> 
    </ul>

    <h3>Exercicios</h3>
    <p>1) Desenvolva um programa que mostre na tela a seguinta conatagem: 100 95 90 85 ... 0 acabou</p>
    <?php 
        for($n = 100; $n >=0; $n-=5) {
            echo "$n ";
        }
        echo "Acabou!";
    ?>

    <p>2) Escreva um algoritimo que calcule e mostre a média aritmética dos numeros entre 13 e 73</p>
    <?php
        $soma = 0;
        $total = 0;
        for($a = 13; $a <= 73; $a++) {
            $soma += $a;
            $total++;
        }

        $media = $soma / $total;

        echo "A media dos numeros entre 13 e 73 é $media";
    ?>

    <p>3) Desenvolva um algoritimo que mostre uma contagem regressiva de 30 até 1, marcando os numeros que forem divisiveis por 4 exatamento como mostrado abaixo:</p>
    <p>30 29 [28] 27 26 25 [24] 23 22 21 [20] 19 18 17 [16]...</p>
    <?php
        for($t = 30; $t >=1; $t--) {
            if($t % 4 == 0) {
                echo "[$t] ";
            } else {
                echo "$t ";
            }
        }
    ?>

</body>
</html>