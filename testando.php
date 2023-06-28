<?php

require './src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->cpfTitular = '123.456.789-10';
$primeiraConta->nomeTitular = 'Daniel';
$primeiraConta->saldo = 200;

$segundaConta = new Conta();
$segundaConta->cpfTitular = '111.111.111-11';
$segundaConta->nomeTitular = 'Patricia';
$segundaConta->saldo = 1500;

