<!-- exercicio

criar uma classe computador com o que vimos ate hoje em sala, sua classe deve ter dados sobre as configuraçoes do computador, processador, clock, memoria, armazenamento (usa a imaginaçao nessa parte). Voce deve ter acoes programadas, por exemplo, liga e desliga, executa um programa, fecha o programa. Lembre-se para um programa ser executado, o computador precisa estar ligado. É um computador simples, de 90 e bolinha, ele executa um SO em dos e por bloco, ou seja, so executa um programa por vez, nao existe multi-tarefa.
-> Nao precisa ter uma interface html.
-> So a classe computador em um arquivo
-> Fazer os testes no mesmo arquivo
-> Lembre-se de usar parametros, return e echo...
Boa sorte e usa a imaginaçao  -->

<?php

class Computador{
    public $processador;
    public $clock;
    public $memoria;
    public $armazenamento;
    public $executa;
    public $status_pc;
    public $status_programa;

    public function __construct($processador, $clock, $memoria, $armazenamento) {
        $this->processador = $processador;
        $this->clock = $clock;
        $this->memoria = $memoria;
        $this->armazenamento = $armazenamento;
    }    

    public function config(){
        echo "<h1>As configurações do computador são:</h1>";
        echo "<h2>Processador: {$this->processador}</h2>";
        echo "<h2>Clock: {$this->clock}GHz</h2>";
        echo "<h2>Memória: {$this->memoria}Gb</h2>";
        echo "<h2>Armazenamento: {$this->armazenamento}Gb</h2>";
    }

    public function liga (){
        if ($this->status_pc == True){
            echo "O computador ja esta ligado</br>";
        }
        else{
            echo "Ligando o computador</br>";
            $this->status_pc = True;
            $this->status_programa = False;
        }
    }

    public function desliga(){
        if ($this->status_pc == True){
            echo "Desligando o computador</br>";
            $this->status = False;
        }
        else{
            echo "Computador desligado</br>";
        }
    }

    public function executa($programa){

        switch($programa){
            case 'navegador':
                if ($this->validaExecuta()){
                    echo "Ja existe um programa em execução</br>";
                }
                else{
                    echo "O navegador esta em execução</br>";
                    $this->status_programa = True;
                }                
                break;
            case 'calculadora':
                if ($this->validaExecuta()){
                    echo "Ja existe um programa em execução</br>";                
                }
                else{
                    echo "A calculadora esta em execução</br>";
                    $this->status_programa = True;
                }
                break;
            case 'jogo':
                if ($this->validaExecuta()){
                    echo "Ja existe um programa em execução</br>";                
                }
                else{
                    echo "O Campo Minado esta em execução</br>";
                    $this->status_programa = True;
                }
                break;
        }
    }

    public function validaExecuta() {

        if ($this->status_programa == True){
            return false;                
        }
        else{
            return false;
        }

    }

    public function fechar_programa(){
        echo "O programa foi fechado. Pronto para executar outro programa!!</br>";
        $this->status_programa = False;
    }


}

$computador1 = new Computador("Intel i3", "3.4", "12", "480");
$computador1->config();
$computador1->liga();
$computador1->executa("navegador");
$computador1->fechar_programa();
$computador1->executa("jogo");
$computador1->executa("calculadora");
$computador1->fechar_programa();
$computador1->executa("calculadora");
$computador1->fechar_programa();
$computador1->desliga();


?>


