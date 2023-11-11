<?php

include('CartasPokemon.php');

class Jogador
{
    private $nome;
    private $cartas;
    private $pontuacao1;
    private $pontuacao2;
    private $empate;


    public function __construct($nome)
    {
        $this->nome = $nome;
        $this->cartas = array();
        $this->pontuacao1 = 0;
        $this->pontuacao2 = 0;
        $this->empate =0;
    }

    public function getNome()
    {
        return $_SESSION['nome'] = $this->nome;
    }

    public function getCartas()
    {
        return $this->cartas;
    }

    public function getPontuacao1()
    {
        return $this->pontuacao1;
    }

    public function getPontuacao2()
    {
        return $this->pontuacao2;
    }

    public function getpartidasEmpate()
    {
        return $this->empate;
    }

    public function adicionarCarta($deck)
    {
        shuffle($deck);
        for ($i = 0; $i < 6; $i++) {
            $this->cartas[] = new CartasPokemon($deck[$i]);
        }
        return $this->cartas;
    }


    public function realizarBatalha($jogador2)
    {
        $this->cartas = $this->getCartas();
        $jogador2->cartas = $jogador2->getCartas();

        for ($i = 0; $i < 6; $i++) {
            $cartas2 = $jogador2->cartas[$i];

            if ($this->cartas[$i]->batalhar($cartas2) == 1) {
                $this->pontuacao1++;
            } elseif ($this->cartas[$i]->batalhar($cartas2) == 0) {
                $this->pontuacao2++;
            }
        }

        return $this->pontuacao1;
    }

    public function verificarFimDeJogo($jogador2)
    {

        if($this->pontuacao1 > $this->pontuacao2){
            return $this->nome . " ganhou!";
        }
        elseif($this->pontuacao2 > $this->pontuacao1){
            return $jogador2->getNome()  . " ganhou!";
        }
        else {
            return "Empate!";
        }

    }

}
