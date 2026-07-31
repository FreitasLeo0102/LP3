<?php

class Veiculo
{
    public string $marca;
    public string $modelo;
    public int $ano;
    public int $combustivel;

    public int $consumoMedio;


    function abastecer($litros)
    {
        $this->combustivel += $litros;
        echo "Abastecido: $litros litros. Combustível atual: $this->combustivel litros.<br><br>";
    }

    function calcularAutonomia()
    {
        $autonomia = $this->combustivel * $this->consumoMedio;
        echo "Autonomia atual: " . number_format($autonomia, 2) . " km.<br><br>";
    }

    function exibirInformacoes()
    {
        echo "Marca: $this->marca <br>";
        echo "Modelo: $this->modelo <br>";
        echo "Ano: $this->ano <br>";
        echo "Combustível: $this->combustivel litros <br>";
        echo "Consumo Médio: $this->consumoMedio km/l <br>";
        $this->calcularAutonomia();
    }

}

?>