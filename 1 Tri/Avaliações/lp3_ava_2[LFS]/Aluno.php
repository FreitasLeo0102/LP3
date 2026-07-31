<?php

class Aluno
{
    public string $nome;
    public int $matricula;
    public string $curso;
    public int $nota1;
    public int $nota2;

    function calcularMedia()
    {
        $media = ($this->nota1 + $this->nota2) / 2;
        echo "A media das suas notas é: " . $media . "<br><br>";
    }

    function verificarAprovacao()
    {
        $media = ($this->nota1 + $this->nota2) / 2;

        if ($media >= 6) {
            echo "APROVADO" . "<br><br>";
        } else {
            echo "REPROVADO" . "<br><br>";
        }
    }

    function alterarCurso($novoCurso)
    {
        $this->curso = $novoCurso;
        echo "Seu curso foi alterado para " . $novoCurso . "<br><br>";
    }

    function atualizarNotas($nota1, $nota2)
    {
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        echo "Suas notas foram atualizadas para " . $nota1 . " e " . $nota2 . "<br><br>";
    }

    function exibirBoletim()
    {
        echo "Nome: " . $this->nome . "<br>";
        echo "Matricula: " . $this->matricula . "<br>";
        echo "Curso: " . $this->curso . "<br>";
        echo "Nota 01: " . $this->nota1 . "<br>";
        echo "Nota 02: " . $this->nota2 . "<br>";
        $this->verificarAprovacao();
    }

    function compararMedia($outroAluno)
    {

        $media1 = ($this->nota1 + $this->nota2) / 2;
        $media2 = ($outroAluno->nota1 + $outroAluno->nota2) / 2;


        if ($media1 > $media2) {
            echo "A media do(a) $this->nome é maior que a media do(a) $outroAluno->nome" . "<br><br>";
        } else if ($media1 < $media2) {
            echo "A media do(a) $outroAluno->nome é maior que a media do(a) $this->nome " . "<br><br>";
        } else {
            echo "As medias do(a) $this->nome e o do(a) $outroAluno->nome são iguais" . "<br><br>";
        }
    }
}
?>