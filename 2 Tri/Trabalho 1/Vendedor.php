<?php
require_once 'Pessoa.php';
class Vendedor extends Pessoa
{
    public function __construct(
        string $nome,
        string $cpf,
        string $sexo,
        string $dataNascmento,
        private float $salario,
        private float $comissao
    ) {
        parent::__construct($nome, $cpf, $sexo, $dataNascmento);
    }

    public function getSalario()
    {
        return $this->salario;
    }
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }
    public function getComissao()
    {
        return $this->comissao;
    }
    public function setComissao($comissao)
    {
        $this->comissao = $comissao;

        return $this;
    }

    public function imprimir()
    {
        echo "Nome: " . $this->getNome() . "<br>";
        echo "CPF: " . $this->getCpf() . "<br>";
        echo "Sexo: " . $this->getSexo() . "<br>";
        echo "Data de Nascimento: " . $this->getDataNascmento() . "<br>";
        echo "Salário: " . $this->getSalario() . "<br>";
        echo "Comissão: " . $this->getComissao() . "<br>";
    }
}

?>