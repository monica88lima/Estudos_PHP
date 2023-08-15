<?php

$Nome = "Alice";
$idade = 8;
$Endereco = [
    'Rua'=>'Rua das Casas',
     'Numero'=> 45,
     'Cidade'=>'Osasco',
    'Estado' => 'São Paulo'];

    echo "Olá eu sou $Nome, tenho $idade.<br>";
    
   echo "Moro na rua ".$Endereco['Rua'];
   echo " n: ".$Endereco['Numero'];
   echo " na cidade de " .$Endereco['Cidade'];