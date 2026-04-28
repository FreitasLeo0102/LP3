<?php
class Funcionario
{
    public int $codigo;
    public string $nome;
    public int $salario;
    public int $cargaHoraria;

    public function calcularSalarioHora()
    {
        echo "Salário por hora: " . ($this->salario / $this->cargaHoraria) . "<br><br>";
    }

    public function aumentarSalario($percentual)
    {
        $this->salario += ($this->salario * ($percentual / 100));
        echo "Salário aumentado em $percentual % = $this->salario  <br><br>";
    }

    public function exibirDados()
    {
        echo "Código:  $this->codigo <br>";
        echo "Nome:  $this->nome <br>";
        echo "Salário: $this->salario <br>";
        echo "Carga Horária:  $this->cargaHoraria <br><br>";
    }
}
?>