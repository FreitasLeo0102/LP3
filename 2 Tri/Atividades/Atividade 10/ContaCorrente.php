<?php
require_once 'Conta.php';

class ContaCorrente extends Conta
{
    public float $limiteChequeEspecial;
    public float $taxaManutencaoMensal;
    public string $cartaoCreditoVencimento;
    public float $valorCartaoCredito;

    public function sacar(float $valor)
    {
        if ($valor <= $this->saldo + $this->limiteChequeEspecial) {
            $this->saldo -= $valor;

            if ($this->saldo < 0) {
                $this->limiteChequeEspecial += $this->saldo;
            }
        } else {
            echo "Valor de saque inválido.";
        }
    }

    public function cobrarTaxaMensal()
    {
        $this->saldo -= $this->taxaManutencaoMensal;

        if ($this->saldo < 0) {
            $this->limiteChequeEspecial += $this->saldo;
        }
    }

    public function solicitarAumentoLimite(float $valor)
    {
        if ($valor > 0) {
            if ($valor < 0.3 * $this->limiteChequeEspecial) {
                $this->limiteChequeEspecial += $valor;
            } else {
                echo "Valor de aumento de limite inválido. O valor deve ser menor que 30% do limite atual.";
            }
        }
    }

    public function pagarFaturaCartao()
    {
        if ($this->cartaoCreditoVencimento <= date('Y-m-d')) {
            $this->saldo -= $this->valorCartaoCredito;
            if ($this->saldo < 0) {
                $this->limiteChequeEspecial += $this->saldo;
            }
        } else {
            echo "A fatura do cartão de crédito ainda não venceu.";
        }
    }
}
?>