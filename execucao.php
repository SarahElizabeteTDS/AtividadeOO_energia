<?php

require_once("modelo/Residencial.php");
require_once("modelo/Comercial.php");
require_once("modelo/Industrial.php");

print "1-Residencial\n2-Comercial\n3-Industrial\n";
$tipo = readline("Que tipo de consumidor você é? (Informe o indíce): ");
$objeto = null;

if ($tipo == 1) 
{
    $objeto = new Residencial();
    $objeto->setConsumo(readline("Informe o consumo (em Kwh): "));
}elseif ($tipo == 2) 
{
    $objeto = new Comercial();
    $objeto->setConsumo(readline("Informe o consumo (em Kwh): ")); 
}elseif ($tipo == 3) 
{
    $objeto = new Industrial();
    $objeto->setConsumo(readline("Informe o consumo (em Kwh): "));
}else
{
    print "Opção inválida!";
    die;
}

print "O valor a ser pago na fatura é de: R$" . $objeto->getValorFatura();
