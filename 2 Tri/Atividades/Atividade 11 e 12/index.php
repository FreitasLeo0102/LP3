<?php
require_once 'Produto.php';
require_once 'ProdutoFisico.php';
require_once 'ProdutoDigital.php';

$produtoFisico = new ProdutoFisico(123, 'cadeira', 'Cadeira gamer', 999.99, 10, true, 15.5, '70x70x120,', 30, "Transportadora XYZ");
$produtoDigital = new ProdutoDigital(456, "Diamante Free Fire", 'Pacote com 100 Diamantes', 4.9, 1000, true, 0.5, 'PNG', 20, "https://nuvem.com/dimante", 'Thaigo morre');


// Produto Fisico
// $produtoFisico->setCodigo(123);
// $produtoFisico->setNome("Cadeira Gamer");
// $produtoFisico->setDescricao("Cadeira Gamer com encosto reclinável e suporte lombar.");
// $produtoFisico->setPrecoBase(999.99);
// $produtoFisico->setQuantidadeEstoque(10);
// $produtoFisico->setIsAtivo(true);
// $produtoFisico->setPeso(15.5);
// $produtoFisico->setDimensoesCxLxA("70x70x120");
// $produtoFisico->setCustoFreteFixo(30);
// $produtoFisico->setTransportadoraParceira("Transportadora XYZ");

// // Produto DIgital 
// $produtoDigital->setCodigo(456);    
// $produtoDigital->setNome("Diamante Free Fire");
// $produtoDigital->setDescricao("Pacote de 100 diamantes para o jogo Free Fire.");
// $produtoDigital->setPrecoBase(4.90);
// $produtoDigital->setQuantidadeEstoque(1000);
// $produtoDigital->setIsAtivo(true);
// $produtoDigital->setTamanhoArquivoMB(0.5);
// $produtoDigital->setFormatoArquivo("PNG");
// $produtoDigital->setLimiteDownloadsPermitidos(20);
// $produtoDigital->setLinkServidorNuvem("https://nuvem.com/diamantes");

echo $produtoFisico->calcularPrecoVenda(3) . "<br>";
echo $produtoDigital->calcularPrecoVenda(3);

?>