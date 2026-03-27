<?php
    $a = 1;
    $b= 5;
    
    function Suma(int $a, int $b):int{
        $suma =$a+$b;
        return $suma;
    }  

    function tieneMasRecursos(int $a, int $b):bool{
        $verificacion;
        if($a>$b){
            $verificacion = "si";
        } else {
            $verificacion = "no";
        }
        return $verificacion;
    }
    
     $suma = Suma($a, $b);
    echo 'La suma de las lineas es: '.$suma.'<br>';

    $comp = tieneMasRecursos($a, $b);
    echo 'La linea A tiene mas recursos que la B?: '.$comp;
?>