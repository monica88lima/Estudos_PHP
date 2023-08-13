<?php

$nome = "Alice";
$tipo = 'Jovem';
$var= 278.4;


echo "Meu nome completo é 'Monica Ferreira Lima'<br>";

echo 'Meu nome completo é "Monica Ferreira Lima"<br>';


if(is_string($nome) && is_string($tipo)){
    echo "É string: $nome<br>É string: $tipo <br>";
}

if(is_string($var)){
    echo "A variavel é string : $var<br>";
}
else{
    echo "A variavel  <strong>não</strong> é string : $var";

}