<?php

class Pokemon {

    private $nome;
    private $nivel;
    private $tipo;
    private $foto;

    public function __construct($nome, $tipo, $foto) {
        $this->nome=$nome;
        $this->nivel = rand(110, 210);
        $this->tipo=$tipo;
        $this->foto=$foto;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getNivel(){
        return $this->nivel;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function getFoto(){
        return $this->foto;
    }

}



?>