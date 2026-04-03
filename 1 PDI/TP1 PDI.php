<?php
    function sumarRecursos(int $a, int $b): int{
        return $a+$b;
    }

    function tieneMasRecursos(int $a, int $b): bool{
        if($a>$b){
            return true;    
        } else {
            return false;
        }
    }

    function lineaMayor(int $a, int $b): int{
        if($a>$b){
            return $a;    
        } else {
            return $b;
        }
    }

    function existeLineaConRecursos(int[] $lineasDeProduccion, int $cantidad): bool{
        foreach($lineasDeProduccion as $linea){
            if($linea == $cantidad){
                return true;
            }
        }
        return false;
    }
        
    

    function lineaMaxima(int[] $lineasDeProduccion): int{
        $maximo = 0;
        foreach($lineasDeProduccion as $linea){
            if($linea > $maximo){
                $maximo = $linea;
            }
        }
        return $maximo;
    }

    function totalDeRecursos(int[] $lineasDeProduccion): int{
        $total = 0;
        foreach($lineasDeProduccion as $linea){
            $total += $linea;
        }
        return $total;
    }

    function produccionEnParalelo(int $cantidad, int $lineasDeProduccion): int{
        for($i=0; $i<$lineasDeProduccion; $i++){
            $cantidad += $cantidad;
        }
        return $cantidad;
    }
     
    function produccionReplicada(int $base, int $nivel): int{
        $produccion = $base;
        for($i=0; $i<$nivel; $i++){
            $produccion += $base;
        }
        return $produccion;
    }

    function lineasEnCrecimiento(int[] $lineasDeProduccion): int[]{
        $lineasEnCrecimiento = [];
        for($i=0; $i<count($lineasDeProduccion)-1; $i++){
            if($lineasDeProduccion[$i] < $lineasDeProduccion[$i+1]){
                $lineasEnCrecimiento[] = $lineasDeProduccion[$i+1];
            }
        }
        return $lineasEnCrecimiento;
    }

    echo "Sumar recursos: " . sumarRecursos(5, 10) . "\n";
    echo "¿Tiene más recursos? " . (tieneMasRecursos(5, 10) ? "Sí" : "No") . "\n";
    echo "Línea mayor: " . lineaMayor(5, 10) . "\n";
    echo "¿Existe línea con recursos? " . (existeLineaConRecursos([5, 10, 15], 10) ? "Sí" : "No") . "\n";
    echo "Línea máxima: " . lineaMaxima([5, 10, 15]) . "\n";
    echo "Total de recursos: " . totalDeRecursos([5, 10, 15]) . "\n";
    echo "Producción en paralelo: " . produccionEnParalelo(5, 3) . "\n";
    echo "Producción replicada: " . produccionReplicada(5, 3) . "\n";
    echo "Líneas en crecimiento: " . lineasEnCrecimiento([5, 10, 15, 20]). "\n";
    

?>