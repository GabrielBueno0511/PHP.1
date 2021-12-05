<?php

class Calculator 
{
    public $num1;
    public $num2;
    public $op;

    public function __construct($value1, $value2, $operacao) {
        $this->num1 = $value1;
        $this->num2 = $value2;
        $this->op = $operacao;
    }

    public function calcula() {

        $result = 0;

        switch ($this->op) {
            case 'sum':
                $result = $this->soma();
                break;
            case 'sub':
                $result = $this->subtracao();
                break;
            case 'mul':
                $result = $this->multiplicacao();
                break;
            case 'div':
                $result = $this->divisao();
                break;
        }

        return $result;

    }

    public function soma() {
        return $this->num1 + $this->num2;
    }

    public function subtracao() {
        return $this->num1 - $this->num2;
    }

    public function multiplicacao() {
        return $this->num1 * $this->num2;
    }

    public function divisao() {
        $result = $this->num1 / $this->num2;
        return number_format($result, 2);
    }
}

?>