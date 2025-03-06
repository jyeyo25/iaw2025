<?php
    $sumaAcumulada = 0;

    for ($i = 1; $i <= 100; $i++) {

        if ($i % 2 == 0) {
            echo "Número par: $i\n<br>";
            $sumaAcumulada += $i;
        }
    }

    echo "La suma de los números pares del 1 al 100 es: $sumaAcumulada\n";  
?>