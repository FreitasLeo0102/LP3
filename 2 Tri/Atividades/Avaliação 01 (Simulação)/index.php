<?php
require_once "Professor.php";
require_once "TecnicoAdministrativo.php";

$prof = new Professor(1234, 'leleo Freitinhas', '12345678909', 150000, true, 3, 'Doutorado', 1, 45000, true);

$tecAdm = new TecnicoAdministrativo(5678, 'Talitinha', '09876543212', 1500, true, 45, "T.I", 1000, "Nivel -2", "Integral");

$prof->demitir();
$prof->admitir();
$prof->aplicarAumento(15);
$prof->calcularSalario();
$prof->verificarSituacao();
$prof->calcularBonus();
$prof->gerarRelatorio();

$tecAdm->demitir();
$tecAdm->admitir();
$tecAdm->aplicarAumento(1);
$tecAdm->calcularSalario();
$tecAdm->calcularAdicional();
$tecAdm->gerarCracha();

Echo 'Relatorio Professor: ' . $prof->gerarRelatorio() . '<br>';
echo 'Cracha Tecnico Administrativo: ' . $tecAdm->gerarCracha() . '<br>';
?>