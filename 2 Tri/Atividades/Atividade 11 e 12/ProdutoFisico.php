<?php
require_once 'Produto.php';

class ProdutoFisico extends Produto
{
    private float $peso;
    private string $dimensoesCxLxA;
    private float $custoFreteFixo;
    private string $transportadoraParceira;

    public function __construct(int $codigo, string $nome, string $descricao, float $precobase, float $quantidadeEstoque, bool $isAtivo, float $peso, string $dimensoesCxLxA, float $custoFreteFixo, $transportadoraParceira) 
    {
        parent::__construct($codigo, $nome, $descricao, $precobase, $quantidadeEstoque, $isAtivo);
        $this->peso = $peso;
        $this->dimensoesCxLxA = $dimensoesCxLxA;
        $this->custoFreteFixo = $custoFreteFixo;
        $this->$transportadoraParceira = $transportadoraParceira;
    }

    public function getPeso(): float
    {
        return $this->peso;
    }
    public function setPeso(float $peso)
    {
        $this->peso = $peso;
    }

    public function getDimensoesCxLxA(): string
    {
        return $this->dimensoesCxLxA;
    }
    public function setDimensoesCxLxA(string $dimensoesCxLxA)
    {
        $this->dimensoesCxLxA = $dimensoesCxLxA;
    }

    public function getCustoFreteFixo(): float
    {
        return $this->custoFreteFixo;
    }
    public function setCustoFreteFixo(float $custoFreteFixo)
    {
        $this->custoFreteFixo = $custoFreteFixo;
    }

    public function getTransportadoraParceira(): string
    {
        return $this->transportadoraParceira;
    }
    public function setTransportadoraParceira(string $transportadoraParceira)
    {
        $this->transportadoraParceira = $transportadoraParceira;
    }

    public function calcularPrecoVenda(int $quantidade)
    {
        return $this->getPrecoBase() + $this->custoFreteFixo + ($this->getPrecoBase() * 0.05);
    }

    public function verificarDisponibilidade() {
        if ($this->getQuantidadeEstoque() > 0 && $this->getIsAtivo() == true) {
            return true;
        } else {
            return false;      
        }
    }

    public function calcularVolumeCubico () {
        $dimensoes = explode('x', $this->dimensoesCxLxA);
        return $dimensoes[0] * $dimensoes[1] * $dimensoes[2];
    }

    public function estimarPrazoEntrega(string $cepDestino) {
     return random_int(3, 10);
    }
}
?>