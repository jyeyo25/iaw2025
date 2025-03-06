<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Pedido Panadería (POST)</title>
</head>
<body>
  <h1>Formulario de Pedido (POST)</h1>
  <form  method="post"  action="form-post.php">>
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="baguettes">Baguettes:</label>
    <input type="number" id="baguettes" name="baguettes" min="0" value="0"><br><br>

    <label for="panecillos">Panecillos:</label>
    <input type="number" id="panecillos" name="panecillos" min="0" value="0"><br><br>

    <label for="panmolde">Pan de Molde:</label>
    <input type="number" id="panmolde" name="panmolde" min="0" value="0"><br><br>

    <button type="submit">Realizar Pedido</button>
  </form>
</body>
</html>