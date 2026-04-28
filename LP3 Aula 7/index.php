<?php
require_once "Gato.php";

$g1 = new Gato(); 
$g1->nome='Roberto';
$g1->cor='Preto';

$g2 = new Gato();
$g2->nome='Maryzinha';


echo "<pre>";
print_r($g1);
print_r($g2);

$g1->miar();
$g2->comer();
echo "</pre>";
?>