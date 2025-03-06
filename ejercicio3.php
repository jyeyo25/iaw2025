<?php  
    $numero = 1;  
    $sumaTotal = 0;  

    while ($numero <= 50) {  
        $cuadrado = $numero * $numero;  
        echo "El cuadrado de $numero es $cuadrado<br>";  
        $sumaTotal += $cuadrado;  
        $numero++;  
    }  

    echo "La suma de los cuadrados es: $sumaTotal";  
?>  