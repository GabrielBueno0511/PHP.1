<?php

require_once 'Animal.php'; #importa a classe Animal

class Mamifero extends Animal {

    public $tempoGestacao;
    public $tempoAmamentacao;
    public $habitart;
    public $raca;
    public $especie;
    public $cor;


    public function __construct($raca,$especie,$cor,$vive){
        parent::__construct($raca,$especie,$cor);
        $this->habitart = $vive;

    }

    public function queMamifero(){
        echo "essa mamifero é um {$this->especie}, {$this->raca} da cor {$this->cor}</br>";
    }

    public function amamentar() {
        echo "Animal está amamentando...</br>";
    }

    public function reproduzir() {
        parent::reproduzir();
        echo "Vão vir filhotes...</br>";
    }

    public function emitirSom() {
        parent::emitirSom();
        echo "mamifero está grunhindo..</br>";
    }

    public function ondeVive(){

        echo "Esse animal é {$this->habitart}</br>";

    }
}

$testMamifero = new Mamifero("leão","Felino", "rosa-com-bolinhas-amarelas", "selvagem");
$testMamifero->queMamifero();
$testMamifero->amamentar();
$testMamifero->respirar();
$testMamifero->reproduzir();
$testMamifero->emitirSom();
$testMamifero->ondeVive();


?>