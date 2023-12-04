<?php
if(isset($_REQUEST['valor1'])){
    $num1 = $_REQUEST['valor1'];
    $num2 = $_REQUEST['valor2'];
    $op = $_REQUEST['operacion'];
    
    #validar si no estan vacios
    if(validar($num1, $num2)){
        $res = 0;
        if($op == "suma"){
            $res = sumar($num1, $num2);
            print("El resultado es: $res");
        }
    }else{
        header("Location: index.php");
        exit();
    }
}



function validar($x, $y){
    if(empty($x) || empty($y)){
        return ""; #retornamos falso si estan vacios
    }else{
        return "1"; #no estan vacios
    }
}

function sumar($n1, $n2){
    return $n1 + $n2;
}

?>