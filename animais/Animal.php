<?php

class Animal {

    public $raca;
    public $especie;
    public $cor;

    public function __construct($raca,$especie,$cor){
        $this->raca = $raca;
        $this->especie = $especie;
        $this-> cor = $cor;

    }

    public function reproduzir() {
        echo "Animal reproduzindo...</br>";
    }

    public function respirar() {
        echo "Animal respirando...</br>";
    }

    public function emitirSom(){
        echo "Fazer barulho...</br>";
    }

}


?>