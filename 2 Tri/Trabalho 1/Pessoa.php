<?php
abstract class Pessoa
{
    public function __construct(
        private string $nome,
        private string $cpf,
        private string $sexo,
        private string $dataNascmento
    ) {
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
    public function getCpf()
    {
        return $this->cpf;
    }
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }
    public function getSexo()
    {
        return $this->sexo;
    }
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }
    public function getDataNascmento()
    {
        return $this->dataNascmento;
    }
    public function setDataNascmento($dataNascmento)
    {
        $this->dataNascmento = $dataNascmento;

        return $this;
    }

    public abstract function imprimir();
}
?>