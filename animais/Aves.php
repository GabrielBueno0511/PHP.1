<?php

require_once 'Animal.php';


class Ave extends Animal {

    public $botarOvo;
    public $voar;
    public $raca;
    public $especie;
    public $cor;



    public function __construct($raca,$especie,$cor,$voo){
        parent::__construct($raca,$especie,$cor);
        $this->voar = $voo;

    }
    public function queAve(){
        echo "essa ave é um {$this->especie}, {$this->raca} da cor {$this->cor}</br>";
    }
    
    public function voar() {
        if(!$this->voar){
            echo "Essa ave não voar...</br>";
        }else{
            echo "A ave esta voando...</br>";
        }
    }
    
    public function botar() {

        echo "A ave esta botando ovos...</br>";
    }
    
    public function emitirSom() {
        parent::emitirSom();
        echo "ave está cantando..</br>";
    }

    
}

$testAve = new Ave("Bem-te-vi","passarinho","amarelo",true );
$testAve->queAve();
$testAve->botar();
$testAve->respirar();
$testAve->voar();
$testAve->emitirSom();




?>