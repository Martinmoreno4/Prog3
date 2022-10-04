<?php
/*
Aplicación No 4 (Calculadora)
Escribir un programa que use la variable $operador que pueda almacenar los símbolos
matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. De acuerdo al
símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
resultado por pantalla.
*/ 
$operador = "/";
$op1 = 5;
$op2 = 0;
$resultado = 0;

switch($operador)
{
    case "+":
        $resultado = $op1 + $op2;
        echo "el resultado de $op1 + $op2 = $resultado <br>";
        break;

    case "-":
        $resultado = $op1 - $op2;
        echo "el resultado de $op1 - $op2 = $resultado <br>";
        break;

    case "/":
        if($op2 == 0)
        {
            echo "no se puede realizar la division <br>";
        }
        else
        {
            $resultado = $op1 / $op2;
            echo "el resultado de $op1 / $op2 = $resultado <br>";
        }
        break;

    case "*":
        $resultado = $op1 * $op2;
        echo "el resultado de $op1 * $op2 = $resultado <br>";
        break;
}

?>