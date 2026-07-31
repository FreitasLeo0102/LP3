<?php
require_once 'Produto.php';

class ProdutoDigital extends Produto
{

    private float $tamanhoArquivoMB;
    private string $formatoArquivo;
    private int $limiteDownloadsPermitidos;
    private string $linkServidorNuvem;
    private string $token;

    public function __construct(int $codigo, string $nome, string $descricao, float $precobase, float $quantidadeEstoque, bool $isAtivo, float $tamanhoArquivoMB, string $formatoArquivo, int $limiteDownloadsPermitidos, string $linkServidorNuvem, string $token)
    {
        parent ::__construct($codigo, $nome, $descricao, $precobase, $quantidadeEstoque, $isAtivo);
        $this->tamanhoArquivoMB = $tamanhoArquivoMB;
        $this->formatoArquivo = $formatoArquivo;
        $this->limiteDownloadsPermitidos = $limiteDownloadsPermitidos;
        $this->linkServidorNuvem = $linkServidorNuvem;
        $this->token = $token;
    }

    public function getTamanhoArquivoMB(): float
    {
        return $this->tamanhoArquivoMB;
    }
    public function setTamanhoArquivoMB(float $tamanhoArquivoMB)
    {
        $this->tamanhoArquivoMB = $tamanhoArquivoMB;
    }

    public function getFormatoArquivo(): string
    {
        return $this->formatoArquivo;
    }
    public function setFormatoArquivo(string $formatoArquivo)
    {
        $this->formatoArquivo = $formatoArquivo;
    }

    public function getLimiteDownloadsPermitidos(): int
    {
        return $this->limiteDownloadsPermitidos;
    }
    public function setLimiteDownloadsPermitidos(int $limiteDownloadsPermitidos)
    {
        $this->limiteDownloadsPermitidos = $limiteDownloadsPermitidos;
    }

    public function getLinkServidorNuvem(): string
    {
        return $this->linkServidorNuvem;
    }
    public function setLinkServidorNuvem(string $linkServidorNuvem)
    {
        $this->linkServidorNuvem = $linkServidorNuvem;
    }

    public function getToken(): string
    {
        return $this->token;
    }
    public function setToken(string $token)
    {
        $this->token = $token;
    }

    public function calcularPrecoVenda(int $quantidade)
    {
        return $this->getPrecoBase() + 2;
    }

    public function verificarDisponibilidade()
    {
        if ($this->getIsAtivo() == true && !empty($this->linkServidorNuvem)) {
            return true;
        } else {
            return false;      
        }
    }

    public function gerarLinkExclusivo(string $id_usuario) {
        $this->token = $this->getLinkServidorNuvem() . $id_usuario . md5(time());
        return $this->token;
    }

    public function revogarAcesso() {
        if ($this->limiteDownloadsPermitidos == 20) {
            unset($this->token);
        }
    }
}
?>