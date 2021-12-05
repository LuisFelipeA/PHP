<?php

class Conta{
    private $NomeCliente;
    private $agencia;
    private $conta;
    private $digito;
    private $saldo;
    private $cpfCliente;
    private $banco;
    private $status;

    public function getNomeCliente(){
        return $this->NomeCliente;
    }

    public function setNomeCliente($nome){
        $this->NomeCliente = $nome;
    }

    
    public function getAgencia(){
        return $this->agencia;
    }

    public function setAgencia($agencia){
        $this->agencia = $agencia;
    }


    public function getConta(){
        return $this->conta;
    }

    public function setConta($n){
        $this->conta = $n;
    }


    public function getDigito(){
        return $this->digito;
    }

    public function setDigito($n){
        $this->digito = $n;
    }


    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo($valor) {
        $this->saldo = $valor;        

    }

    public function getCPFCliente(){
        return $this->cpfCliente;
    }

    public function setCPFCliente($n){
        $this->cpfCliente = $n;
    }

    public function getBanco(){
        return $this->banco;
    }

    public function setBanco($nome){
        $this->banco = $nome;
    }


    public function getStatusConta(){
        return $this->status;
    }

    public function setStatusConta($status){
        $this->status = $status;
    }



    public function saque($valor){
        if ($this->saldo >= $valor && $this->status = True){
            $this->saldo = $this->saldo - $valor;
            echo "Valor retirado: R$".number_format($valor, 2, '.', '')."</br>";
        }
        else {
            echo "Valor indisponivel para saque";
        }
    }

    public function deposito($valor){
        if ($valor > 0){
            $this->saldo = $this->saldo + $valor;
            echo "Valor depositado: R$".number_format($valor, 2, '.', '')."</br>";
        }
    }

    public function bloquearConta(){
        if ($this->saldo < 0){
            $this->status = False;
            echo "Conta bloqueada";
        }
    }

    public function liberarConta(){
        if ($this->status = False && $this->saldo > 0){
            $this->status = True;
            echo "Conta liberada";
        }
    }

    public function dadosConta(){
        echo"<h1>Dados da conta</h1>";
        echo "Nome Cliente: $this->NomeCliente</br>";
        echo "Agencia: $this->agencia</br>";
        echo "Conta: $this->conta</br>";
        echo "Digito: $this->digito</br>";
        echo "Saldo: $this->saldo</br>";
        echo "CPF: $this->cpfCliente</br>";
        echo "Banco: $this->banco</br>";
        if ($this->status = True){
            echo "Status da conta: Liberada</br>";
        }
        else{
            echo "Status da conta:bloqueada</br>";
        }
        echo "<h1>Movimentação</h1>";

    }

    public function mostrarSaldo(){
        echo "<h4>Saldo: R$".number_format($this->saldo, 2, '.', '')."</br></h4>";
    }

}

$contaNuBank = new Conta();
$contaNuBank->setNomeCliente("Luis");
$contaNuBank->setConta(1234);
$contaNuBank->setDigito(5);
$contaNuBank->setSaldo(123.5);
$contaNuBank->setCPFCliente(123456789);
$contaNuBank->setBanco("NuBank");
$contaNuBank->dadosConta();
$contaNuBank->saque(50);
$contaNuBank->deposito(200);
$contaNuBank->mostrarSaldo();



?>