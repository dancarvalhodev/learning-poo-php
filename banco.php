<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$daniel = new Titular(new Cpf('111.111.111-11'), 'Daniel');
$primeiraConta = new Conta($daniel);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$fulano = new Titular(new Cpf('222.222.222-22'), 'Fulano');
$segundaConta = new Conta($fulano);
var_dump($segundaConta);

new Conta(new Titular(new Cpf('333.333.222-22'), 'Ciclano'));
echo Conta::recuperaNumeroDeContas();