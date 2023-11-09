<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
    <h1>Formulario de pedido para Restaurante 1</h1>
    <div class="formulario">
        <form action="../procesar_pedido.php" method="post">
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
    </div>

    <h2>Consulta de Pedido</h2>
    <div class="consulta-formulario">
        <form action="consultar_pedido.php" method="post">
            <label for="numero_pedido">Número de Pedido:</label>
            <input type="text" name="numero_pedido" id="numero_pedido" required>
            <input type="submit" value="Consultar Pedido">
        </form>
    </div>
    
</body>
</html>
