<?php
abstract class Conta
{
    public int $numero;
    public string $titular;
    public int $agencia;
    public float $saldo;
    public string $dataAbertura;
    public int $status;

    public function depositar(float $valor)
    {
        if ($valor > 0) {
            $this->saldo += $valor;
        } else {
            echo "Valor de depósito inválido.";
        }
    }

    public function sacar(float $valor)
    {
        if ($valor > 0 && $this->saldo >= $valor) {
            $this->saldo -= $valor;
        } else {
            echo "Saldo insuficiente ou valor de saque inválido.";
        }
    }

    public function transferir(float $valor, Conta $destino)
    {
        if (!empty($destino) && $destino->status == 1 && $valor > 0 && $this->saldo >= $valor) {
            $this->saldo -= $valor;
            $destino->saldo += $valor;
            return true;
        } else {
            return false;
        }
    }

    public function fecharConta()
    {
        if ($this->saldo == 0) {
            $this->status = 0;
            echo "Conta fechada com sucesso.";
        } else if ($this->saldo > 0) {
            echo "A conta possui saldo. Realize um saque ou transferência para zerar o saldo antes de fechar a conta.";
        } else {
            echo "A conta possui saldo negativo. Realize um depósito para cobrir o saldo negativo antes de fechar a conta.";
        }
    }

    public function consultarSaldo()
    {
        return $this->saldo;
    }
}
?>