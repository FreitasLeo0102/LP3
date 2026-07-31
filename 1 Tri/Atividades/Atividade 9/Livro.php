<?php

class Livro 
{
    public string $titulo;
    public string $autor;
    public int $qtdPages;
    public int $qtdExemplares;


    function emprestarLivro()
    {
        if($this->qtdExemplares > 0) {
            $this->qtdExemplares--;
            echo "Livro emprestado com sucesso<br> Exemplares restantes: $this->qtdExemplares<br><br>";
        } else {
            echo "Não há exemplares disponíveis para empréstimo.<br><br>";
        }
    }

    function devolverLivro()
    {
        $this->qtdExemplares++;
        echo "Livro devolvido com sucesso<br> Exemplares disponíveis: $this->qtdExemplares<br><br>";
    }

    function verificarDisponibilidade()
    {
        if($this->qtdExemplares > 0) {
            echo "O livro está disponível para empréstimo.<br><br>";
        } else {
            echo "O livro não está disponível para empréstimo.<br><br>";
        }
    }

    function alterarQuantidadePaginas($novaQuantidade)
    {
        $this->qtdPages = $novaQuantidade;
        echo "Quantidade de páginas alterada para: $this->qtdPages<br><br>";
    }

    function exibirInformacoes()
    {
        echo "Título: $this->titulo<br>";
        echo "Autor: $this->autor<br>";
        echo "Quantidade de páginas: $this->qtdPages<br>";
        echo "Exemplares disponíveis: $this->qtdExemplares<br><br>";
    }

    function compararPaginas($outroLivro) 
    {
        if($this->qtdPages > $outroLivro->qtdPages) {
            echo "O livro '$this->titulo' tem mais páginas que '$outroLivro->titulo'.<br><br>";
        } else if($this->qtdPages < $outroLivro->qtdPages) {
            echo "O livro '$outroLivro->titulo' tem mais páginas que '$this->titulo'.<br><br>";
        } else {
            echo "Os livros $this->titulo e $outroLivro->titulo têm a mesma quantidade de páginas.<br><br>";
        }
    }
}

?>