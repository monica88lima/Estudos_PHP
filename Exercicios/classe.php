<?php
class ContaBancaria{

    public $nomeTitular;
    public $numeroSaldo;
    public $numeroConta;
    public $Saldo;
    public $Banco;

    public function __construct(string $nome, int $saldo = 0, string $Banco) {
        $this->nomeTitular = $nome;
        $this->Saldo = $saldo;
        $this->Banco = $Banco;
    }

    public function obterSaldo(){
        return "Seu saldo é $this->Saldo";
    }
}
 $conta = new ContaBancaria("Monica", 200.00, "Novo"); 
 var_dump($conta);
echo $conta ->obterSaldo();



