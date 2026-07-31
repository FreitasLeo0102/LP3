<?php
require_once 'Pessoa.php';
class Cliente extends Pessoa
{
    public function __construct(
        string $nome,
        string $cpf,
        string $sexo,
        string $dataNascmento,
        private string $dataCadastro = date("d/m/Y"),
        private string $preferencias
    ) {
        parent::__construct($nome, $cpf, $sexo, $dataNascmento);
    }

    public function getDataCadastro()
    {
        return $this->dataCadastro;
    }
    public function setDataCadastro($dataCadastro)
    {
        $this->dataCadastro = $dataCadastro;

        return $this;
    }
    public function getPreferencias()
    {
        return $this->preferencias;
    }
    public function setPreferencias($preferencias)
    {
        $this->preferencias = $preferencias;

        return $this;
    }

    public function imprimir()
    {
        echo "Nome: " . $this->getNome() . "<br>";
        echo "CPF: " . $this->getCpf() . "<br>";
        echo "Sexo: " . $this->getSexo() . "<br>";
        echo "Data de Nascimento: " . $this->getDataNascmento() . "<br>";
        echo "Data de Cadastro: " . $this->getDataCadastro() . "<br>";
        echo "Preferências: " . $this->getPreferencias() . "<br>";
    }
}
?>