<?php

    if (isset($_POST['num1'])&isset($_POST['num2'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacion = $_POST['operacion'];
        $resultado = calculadora($num1,$num2,$operacion);
    };

    function calculadora($num1,$num2,$operacion){
        switch ($operacion){
            case 'suma':
                return $num1+$num2;
                break;
            case 'resta':
                return $num1-$num2;
                break;
            case 'multiplicacion':
                return $num1*$num2;
                break;
            case 'division':
                if ($num1==0&$num2==0){
                    return "Err. No se puede dividir entre 0";
                } else {
                    return $num1/$num2;
                }
                break;
            default:
            return "Error desconocido";
            break;
        }
    }

    require "./02-Calculadora_view.php";

?>