<?php
require_once 'Funcionario.php';
class TecnicoAdministrativo extends Funcionario
{
    private string $setor;
    private float $adicionalInsalubridade;
    private string $nivel;
    private string $turno;

    public function __construct(int $matricula, string $nome, string $cpf, float $salarioBase, bool $ativo, int $cargaHoraria, string $setor, float $adicionalInsalubridade, string $nivel, string $turno)
    {
        parent::__construct($matricula, $nome, $cpf, $salarioBase, $ativo, $cargaHoraria);
        $this->setor = $setor;
        $this->adicionalInsalubridade = $adicionalInsalubridade;
        $this->nivel = $nivel;
        $this->turno = $turno;
    }

    public function getSetor(): string
    {
        return $this->setor;
    }

    public function getAdicionalInsalubridade(): float
    {
        return $this->adicionalInsalubridade;
    }

    public function getNivel(): string
    {
        return $this->nivel;
    }

    public function getTurno(): string
    {
        return $this->turno;
    }

    public function setSetor(string $setor): void
    {
        $this->setor = $setor;
    }

    public function setAdicionalInsalubridade(float $adicionalInsalubridade): void
    {
        $this->adicionalInsalubridade = $adicionalInsalubridade;
    }

    public function setNivel(string $nivel): void
    {
        $this->nivel = $nivel;
    }

    public function setTurno(string $turno): void
    {
        $this->turno = $turno;
    }

    public function calcularSalario(): float
    {
        if ($this->getTurno() === "Noturno") {
            return $this->getSalarioBase() + $this->getAdicionalInsalubridade() + (0.2 * $this->getSalarioBase());
        } else {
            return $this->getSalarioBase() + $this->getAdicionalInsalubridade();
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

    public function calcularAdicional(): float
    {
        return $this->getAdicionalInsalubridade();
    }

    public function gerarCracha(): string
    {
        return md5($this->getMatricula()) . md5($this->getNome()) . md5($this->getSetor());
    }
}
?>