<?php

class conta {

    private $conta;
    private $agencia;
    private $digito;
    private $saldo;
    private $cpfCliente;
    private $nomeCliente;
    private $banco;
    private $bloqueio;

// conta
    public function setConta($conta){
        $this->conta = $conta;
    }
    public function getConta(){
        return $this->conta;
    }

// digito
    public function setDigito($digito){
        $this->digito = $digito;
    }
    public function getDigito(){
        return $this->digito;
    }

// agencia
    public function setAgencia($agencia){
        $this->agencia = $agencia;
    }
    public function getAgencia(){
        return $this->agencia;
    }
// banco
    public function setBanco($banco){
        $this->banco = $banco;
    }
    public function getBanco(){
        return $this->banco;
    }


// saldo

    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    public function getSaldo(){
        return $this->saldo;
    }

// cpf    
    public function setCpf($cpf){
        $this->cpfCliente = $cpf;
    }
    public function getCpf(){
        return $this->cpfCliente;
    }

// nome
    public function setNome($nome){
        $this->nomeCliente = $nome;
    }
    public function getNome(){
        return $this->nomeCliente;
    }
// status
    private function validarStatus(){
        if($this->saldo >= 0){
            $this->bloqueio = false;
        }else{
            $this->bloqueio = true;
            echo " conta bloqueada ";
        }
    }
// saque

    public function saque($valor){
        if($valor < $this->saldo){
            $this->saldo - valor;
        }else{
            echo "valor invalido";
        }
    }

// deposito
    public function deposito($valor){
        $this->saldo + $valor;
    }

   
    



}

$conta1 = new conta();
$conta1->setConta("123625");
$conta1->setDigito("10");
$conta1->setAgencia("4002");
$conta1->setCpf("145.796.785-7");
$conta1->setBanco("Bradesco");
$conta1->setNome("Taldo Braxado");
$conta1->setSaldo(10);
$conta1->saque(100);
$conta1->deposito(100);

echo "</p> Conta: {$conta1->getConta()} - {$conta1->getDigito()}  {$conta1->getAgencia()} </br>";
echo "</p> Banco:{$conta1->getBanco()}";
echo "</p> Nome do CLiente:{$conta1->getNome()} CPF:{$conta1->getCpf()}";
echo "</p> saldo {$conta1->getSaldo()}";


?>