<?php

include('Pokemon.php');

class CartasPokemon
{
    private $pokemon;

    public function __construct($pokemon)
    {
        $this->pokemon = $pokemon;
    }

    public function getPokemon()
    {
        return $this->pokemon;
    }

    public function exibirCartas($jogador1, $jogador2)
    {

        echo "<span class='title'>Cartas de ".$jogador1->getNome()."</span>";

        echo "<div class='cartas'>";
        foreach ($jogador1->getCartas() as $carta) {
            echo "<div class='carta'><img class='effect' src='images/background/effect.gif'>";
            echo "<span class='nome'>".$carta->getPokemon()->getNome() ."</span>";
            echo "<img class='pokemon' src=". $carta->getPokemon()->getFoto() .">";
            echo "<span class='nivel'>".$carta->getPokemon()->getNivel() ."</span>";
            echo "<span class='ntipo'>".$carta->getPokemon()->gettipo() ."</span>";
            echo "</div>";
        }
        echo "</div>";

        echo "<div class='vs-box'><div class='vs'><span>V/S</span></div></div>";

        echo "<div class='cartas'>";
        foreach ($jogador2->getCartas() as $carta) {
            echo "<div class='carta'><img class='effect' src='images/background/effect.gif'>";
            echo "<span class='nome'>".$carta->getPokemon()->getNome() ."</span>";
            echo "<img class='pokemon' src=". $carta->getPokemon()->getFoto() .">";
            echo "<span class='nivel'>".$carta->getPokemon()->getNivel() ."</span>";
            echo "<span class='ntipo'>".$carta->getPokemon()->gettipo() ."</span>";
            echo "</div>";
        }
        echo "</div>";
        echo "<span class='title'>Cartas de ".$jogador2->getNome()."</span>";
        echo "</div>";
    }


    public function batalhar($cartas)
    {
        $carta1 = $this->getPokemon()->getNivel();
        $carta2 = $cartas->getPokemon()->getNivel();

        if ($carta1 > $carta2) {
            return 1;
        } elseif ($carta2 > $carta1) {
            return 0;
        } 
        else{
            return -1;
        }
    }
}
