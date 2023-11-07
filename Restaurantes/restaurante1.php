<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
    <h1>Formulario de pedido para Restaurante 1</h1>
    <form action="procesar_pedido.php" method="post">
        <!-- Agrega aquí los campos del formulario de pedido -->
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <label for="direccion">Dirección de entrega:</label>
        <input type="text" name="direccion" id="direccion" required>
        <label for="comida">Seleccione su comida:</label>
        <select name="comida" id="comida" required>
            <option value="plato1">Plato 1</option>
            <option value="plato2">Plato 2</option>
            <!-- Agrega más opciones de comida aquí -->
        </select>
        <input type="submit" value="Enviar Pedido">
    </form>
</body>
</html>
