<?php

require_once 'Funcionario.php';
class Professor extends Funcionario
{
    private string $titulacao;
    private int $horasAula;
    private float $valorHoraAula;
    private bool $coordenador;

    public function __construct(int $matricula, string $nome, string $cpf, float $salarioBase, bool $ativo, int $cargaHoraria, string $titulacao, int $horasAula, float $valorHoraAula, bool $coordenador)
    {
        parent::__construct($matricula, $nome, $cpf, $salarioBase, $ativo, $cargaHoraria);
        $this->titulacao = $titulacao;
        $this->horasAula = $horasAula;
        $this->valorHoraAula = $valorHoraAula;
        $this->coordenador = $coordenador;
    }

    public function getTitulacao(): string
    {
        return $this->titulacao;
    }
    public function getHorasAula(): int
    {
        return $this->horasAula;
    }
    public function getValorHoraAula(): float
    {
        return $this->valorHoraAula;
    }
    public function isCoordenador(): bool
    {
        return $this->coordenador;
    }

    public function setTitulacao(string $titulacao): void
    {
        $this->titulacao = $titulacao;
    }
    public function setHorasAula(int $horasAula): void
    {
        $this->horasAula = $horasAula;
    }
    public function setValorHoraAula(float $valorHoraAula): void
    {
        $this->valorHoraAula = $valorHoraAula;
    }
    public function setCoordenador(bool $coordenador): void
    {
        $this->coordenador = $coordenador;
    }

    public function calcularSalario(): float
    {

        if ($this->isCoordenador()) {
            return $this->getSalarioBase() + ($this->getHorasAula() * $this->getValorHoraAula()) + 1500;
        } else {
            return $this->getSalarioBase() + ($this->getHorasAula() * $this->getValorHoraAula());
        }
    }

    public function verificarSituacao(): bool
    {
        if ($this->isAtivo()) {
            return true;
        } else {
            return false;
        }
    }

    public function calcularBonus(): float
    {
        if ($this->getTitulacao() === 'Doutorado') {
            return 2000;
        } elseif ($this->getTitulacao() === 'Mestrado') {
            return 1000;
        } else {
            return 500;
        }
    }

    public function gerarRelatorio(): string
    {
        return "Matricula: " . $this->getMatricula() .
            "Nome: " . $this->getNome() .
            "Titulacao: " . $this->getTitulacao() .
            "Salario: " . ($this->calcularSalario() + $this->calcularBonus());
    }
}
?>