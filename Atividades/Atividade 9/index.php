<?php 
require_once "Livro.php";

echo "<h1>Atividade: Sistema de Biblioteca</h1>";

echo "<h2>Livro 1</h2>";
$l1 = new Livro();
$l1->titulo = "O Senhor dos Anéis";
$l1->autor = "J.R.R. Tolkien";
$l1->qtdPages = 1200;
$l1->qtdExemplares = 5;

$l1->emprestarLivro();
$l1->devolverLivro();
$l1->verificarDisponibilidade();
$l1->exibirInformacoes();
$l1->compararPaginas($l1);
$l1->alterarQuantidadePaginas(1300);


echo "<h2>Livro 2</h2>";
$l2 = new Livro();
$l2->titulo = "Diario de um Banana";
$l2->autor = "Jeff Kinney";
$l2->qtdPages = 300;
$l2->qtdExemplares = 3;

$l2->emprestarLivro();
$l2->devolverLivro();
$l2->verificarDisponibilidade();
$l2->exibirInformacoes();
$l2->compararPaginas($l1);


echo "<h2>Livro 3</h2>";
$l3 = new Livro();
$l3->titulo = "O Instituto";
$l3->autor = "Stephen King";
$l3->qtdPages = 600;
$l3->qtdExemplares = 0;

$l3->emprestarLivro();
$l3->devolverLivro();
$l3->verificarDisponibilidade();
$l3->exibirInformacoes();
$l3->compararPaginas($l2);
?>