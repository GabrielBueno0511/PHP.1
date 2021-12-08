<?php 
// Criar um classe computrador com ooque vimos até hoje em sala,sua classe deve ter dados sobre as configuração do seu computador, procesadores,clock,memória,armazenamento (usa a imaginação nessa parte)
// Você deve ter ações programadas, por exemplo. liga e desligaexecuta um programa, fecha u programa,
// lembre-se para u programa ser executado, o computador precisa esta ligado.
// É um computador simples, de 90 e bolinha, ele executa um So em dos e por bloco, ou seja, só executa um programa por vez. não existe multi-tarefa.
// -> não precisa ter uma interface html.
// ->Só a classe computador em um arquivo
// -> fazer os teste no mesmo arquivo
// -> Lemnre-se de usar parametros, return e echo....
// Boa sorte e use a imaginação 



class computer
{
    public $isLigado;
    public $processador;
    public $clock;
    public $memoriaRAM;
    public $armazenamento;
    public $appword;
    public $appexplorer;
    public $ramDisp;
    public $usuario;
    public $senha;

    public function __construct($user,$password){

        $this->usuario = $user;
        $this->senha = $password;

    }

    public function locked(){
        if($this->usuario == "Valdir" and $this->senha == "0verdadeiro"){

            return false;

        }else{

            return true;

        }
    }
    public function listProgram(){

        echo "<h2>Lista de Programas:</br></h2>";
        echo "<h3>EditText (word)</br></h3>";
        echo "<h3>Navegador (Explorer)</br></h3>";
        echo "</br>";

    }

    public function exePrograma($programa) {
        if(!$this->locked()){

            if($programa == "EditText"){
                
                $this->word();
                
            } elseif ($programa == "Navegador"){
    
                $this->explorer();
    
            } else{
                echo "programa não encontrado</br>";
            }
            
        }else{

            echo "Você não ter permissão</br>";

        }
        

    }



    public function configPC(){
        echo "<h1>Bem vindo!</br>Usuario:{$this->usuario} </br>Esse Computador possui um  processador {$this->processador}, um clock de {$this->clock} , uma memória RAM de {$this->memoriaRAM} mb ,{$this->armazenamento} gb de armazenamento</h1></br>";
    }

    public function mostrarStatus(){
        if ($this->isLigado){
            echo "O computador está ligado</br>";
        }else{
            echo "O computador está desligado</br>";
        }
    }

    public function ligar() {
        if (!$this->isLigado){
            $this->isLigado = true;

        }
        $this->mostrarStatus();

    }


    public function desligar() {
        if ($this->isLigado){
            $this->isLigado = false;
            
        }
        $this->mostrarStatus();

    }

    

    public function word() {
        if (!$this->isLigado){
            echo "error</br>";
        } elseif ($this->memoriaRAM < 11) {
            echo "error</br>";
            echo "não foi possivel executar essa aplicação</br>";
        } else {
        
        echo "comando exeProgram(EditText)</br>";
        $this->appword = true;
        $this->ram();
        $this->ramDisponivel();

        }
        

    } 

    public function explorer(){
        if (!$this->isLigado){
            echo "error</br>";
        } elseif ($this->memoriaRAM < 11) {
            echo "error</br>";
            echo "não foi possivel executar essa aplicação</br>";
        }  else {
            
            echo "comando exeProgram(Navegador)</br>";
            $this->appexplorer = true;
            $this->ram();
            $this->ramDisponivel();

        }
        
    }
    public function ramDisponivel(){

        if($this->appword){
            $this->appword = true;
            
            echo "<h3>o word está em uso, memória RAM disponível: {$this->ramDisp} mb</br></h3>";
        } elseif($this->appexplorer){
            $this->appexplorer = true;
            
            echo "<h3>o explorer está em uso, memória RAM disponível: {$this->ramDisp} mb</br></h3>";
        } else {

            $this->memoriaRAM = $this->memoriaRAM -= 0 ;
            echo "<h3>Nada está em execução, memória RAM disponível: {$this->memoriaRAM} mb</br></h3>";
            
        }
    }

    public function xProgamas(){

        if($this->appword){
            $this->appword = false;
            echo "<h2></br>word foi encerrado</br><h2>";
            $this->memoriaRAM = $this->memoriaRAM += 10 ;

        } elseif($this->appexplorer){
            $this->appexplorer = false;
            echo "<h2></br>explorer foi encerrado</br></h2>";
            $this->memoriaRAM = $this->memoriaRAM += 10 ;
        } else {
            echo "<h2></br>nenhum programas estava aberto</br></h2>";
        }

    }

    public function ram(){
        
        $this->ramDisp = $this->memoriaRAM -= 10;
        return ($this->ramDisp);
    }
      

}

$teste = new computer("Valdir","0verdadeiro");
$teste->isLigado = true;
$teste->isLock = true;
$teste->locked();
$teste->processador = "Pentium";
$teste->clock = "66Mhz";
$teste->memoriaRAM = 16;
$teste->armazenamento = "1";
$teste->configPC();
$teste->listProgram();
$teste->exePrograma("Navegador");
$teste->exePrograma("EditText");
$teste->xProgamas();
$teste->exePrograma("EditText");
$teste->xProgamas();
$teste->desligar();
?>