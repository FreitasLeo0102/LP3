<?php
require_once 'Conta.php';

class ContaPoupanca extends Conta
{
    public int $diaAniversario;
    public float $taxaRendimento;
    public int $diasSemMovimentacao;

    public function creditarRendimento()
    {
        if ($this->diaAniversario == date('d')) {
            $rendimento = $this->saldo * $this->taxaRendimento;
            $this->saldo += $rendimento;
        }
    }

    public function preverProximoRendimento()
    {
        $rendimento = $this->saldo * $this->taxaRendimento;
        return $rendimento;
    }
}
?>