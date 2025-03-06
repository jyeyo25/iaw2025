<?php  
        $sum = 0;  

        for ($i = 1; $i <= 100; $i++) {
            if ($i % 5 == 0) {
                echo $i . "\n";
                $sum += $i; 
            }  
        }  

        $cuadrado = $sum * $sum;
        echo "<br>La suma de los múltiplos de 5 es: " . $sum . "\n <br>";
        echo "El cuadrado de la suma es: " . $cuadrado . "\n";
?>