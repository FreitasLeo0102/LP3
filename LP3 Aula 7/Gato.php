<?php  
class Gato {
    public string $cor;
    public string $raca;
    public string $nome;
    public int $dataNascimento;
    public int $peso;
    public string $sexo;
    public string $porte;

    public function miar (){
        echo "Miauuuuuuuuuuuuuuu! <br>";
    }
    public function comer (){
        echo "Gato comendo... <br>";
    }
    public function dormir (){
        echo "Zzzzzzzzzzzzzzzzzzz... <br>";
    }
    public function correr (){
        echo "Gato correndo... <br>";
    }
    public function darPatinha (){
        echo "Gato dando patinha... <br>";
    }
    public function arranhar (){
        echo "Gato arranhando... <br>";
    }
    public function ronronar (){
        echo "Gato ronronando... <br>";
    }
}
?>