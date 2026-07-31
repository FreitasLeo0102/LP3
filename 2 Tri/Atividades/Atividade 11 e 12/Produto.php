<?php
abstract class Produto
{
    private int $codigo;
    private string $nome;
    private string $descricao;
    private float $precoBase;
    private float $quantidadeEstoque;
    private bool $isAtivo;

    public function __construct(int $codigo, string $nome, string $descricao, float $precobase, float $quantidadeEstoque, bool $isAtivo)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->precoBase = $precobase;
        $this->quantidadeEstoque = $quantidadeEstoque;
        $this->isAtivo = $isAtivo;
    }

    public function getCodigo(): int
    {
        return $this->codigo;
    }
    public function setCodigo(int $codigo)
    {
        $this->codigo = $codigo;
    }

    public function getNome(): string
    {
        return $this->nome;
    }
    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }
    public function setDescricao(string $descricao)
    {
        $this->descricao = $descricao;
    }

    public function getPrecoBase(): float
    {
        return $this->precoBase;
    }
    public function setPrecoBase(float $precoBase)
    {
        $this->precoBase = $precoBase;
    }

    public function getQuantidadeEstoque(): float
    {
        return $this->quantidadeEstoque;
    }
    public function setQuantidadeEstoque(float $quantidadeEstoque)
    {
        $this->quantidadeEstoque = $quantidadeEstoque;
    }

    public function getIsAtivo(): bool
    {
        return $this->isAtivo;
    }
    public function setIsAtivo(bool $isAtivo)
    {
        $this->isAtivo = $isAtivo;
    }

    public function adicionarEstoque(int $quantidade)
    {
        if ($quantidade > 0) {
            $this->quantidadeEstoque += $quantidade;

            if ($this->quantidadeEstoque > 0) {
                $this->isAtivo = true;
            }
        }
    }

    public function baixarEstoque(int $quantidade)
    {
        $this->quantidadeEstoque -= $quantidade;

        if ($this->quantidadeEstoque <= 0) {
            $this->isAtivo = false;
        }
    }

    public function aplicarDesconto(float $percentual)
    {
        if ($percentual >= 0 && $percentual <= 90) {
            $this->precoBase -= ($this->precoBase * $percentual) / 100;
        }
    }

    public abstract function calcularPrecoVenda(int $quantidade);

    public abstract function verificarDisponibilidade();
}
?>