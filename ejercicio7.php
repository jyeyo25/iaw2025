<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Ejercicio 7</title>
</head>
<body>
    <h1>Calculadora Básica</h1>  
    <form method="post">  
        <label for="numero1">Número 1:</label>  
        <input type="number" name="numero1" id="numero1" required>  
        <br>
        <label for="numero2">Número 2:</label>  
        <input type="number" name="numero2" id="numero2" required>  
        <br>
        <label for="operacion">Operación:</label>  
        <select name="operacion" id="operacion">  
            <option value="suma">Suma</option>  
            <option value="resta">Resta</option>  
            <option value="multiplicacion">Multiplicación</option>  
            <option value="division">División</option>  
        </select>
        <br>
        <button type="submit">Calcular</button>  
    </form>  

    <?php  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
        $numero1 = $_POST['numero1'];  
        $numero2 = $_POST['numero2'];  
        $operacion = $_POST['operacion'];  

        switch ($operacion) {  
            case 'suma':  
                $resultado = $numero1 + $numero2;  
                break;  
            case 'resta':  
                $resultado = $numero1 - $numero2;  
                break;  
            case 'multiplicacion':  
                $resultado = $numero1 * $numero2;  
                break;  
            case 'division':  
                if ($numero2 != 0) {  
                    $resultado = $numero1 / $numero2;  
                } else {  
                    $resultado = "Error: División por cero.";  
                }  
                break;  
            default:  
                $resultado = "Operación no válida.";  
        }  

        echo "<h2>Resultado: $resultado</h2>";  
    }  
    ?>  
</body>  
</html>  