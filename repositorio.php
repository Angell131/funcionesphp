<?php
function transformar($dato){//paso argumento por valor
    return $dato." transformado";
}

function calculartotal($unidades, $precio, $iva){
    $subtotal=$unidades*$precio;
    $cuotaIva=$subtotal*$iva;
    $total=$subtotal+$cuotaIva;
    return $total;

}

function calculartotal2($unidades, $precio, $tipoOperacion){
    $subtotal=$unidades*$precio;
    //$cuotaIva=0;
    if ($tipoOperacion=="normal"){
        $cuotaIva=$subtotal*0.21;
    }
    elseif($tipoOperacion=="reducido"){
        $cuotaIva=$subtotal*0.1;
    }else{
        $cuotaIva=$subtotal*0.04;
    }
    $total=$subtotal+$cuotaIva;
    return $total;
}

function manipularString($mensaje){
    return "En mayusculas ".strtoupper($mensaje);
}

function primeraMayuscula($dato){
     //retorna el dato con la primera letra en mayuscula
}

function reemplazar($valorBuscado,$valorReemplazar){
    //le das que buscas una a u que muestre una e
//convert_cyr_string(string $str, string $from, string $to): string;
}

function mostrarMes($fecha){
    //envias la fecha y retornas mes en castellano

}

function info(){
    //muestra version de php y servidor
}

function numeroPrimo($numero){
    //retorna si es primo o no
    gmp_prob_prime($nume);
}

function bisiesto($año){
    //dice si un año es o no bisiesto
}
