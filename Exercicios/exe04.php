<?php

$num1 = 2.0;
$num2 = 5.5;
$var= "278.4";
$result = $num1+$num2 ;
echo "4.5<br>";

if(is_float($result)){
    echo "A Soma entre $num1 + $num2 = $result<br>";
}

if(is_float($var)){
    echo "A variavel é float : $var";
}
else{
    echo "A variavel  <strong>não</strong> é float : $var";

}