<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén el número de pedido desde el formulario
    $numero_pedido = $_POST["numero_pedido"];

    // Configuración de conexión a Azure SQL Server (reemplaza con tus valores)
    $serverName = "bdg3.database.windows.net";
    $connectionOptions = array(
        "Database" => "Bdg3",
        "Uid" => "unmsmg3",
        "PWD" => "S54@a1a1"
    );

    // Intenta establecer la conexión
    $conn = sqlsrv_connect($serverName, $connectionOptions);

    // Verifica la conexión
    if (!$conn) {
        die(print_r(sqlsrv_errors(), true));
    }

    // Consulta SQL para obtener información del pedido
    $sql = "SELECT * FROM I01_Pedidos_TC WHERE nro_pedido = ?";
    $params = array($numero_pedido);
    $stmt = sqlsrv_query($conn, $sql, $params);

    // Muestra los resultados
    if ($stmt) {
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            echo "Número de Pedido: " . $row["nro_pedido"] . "<br>";
            echo "ID Cliente: " . $row["doc_id_cliente"] . "<br>";
            echo "Cliente: " . $row["cdsc_cliente"] . "<br>";
            echo "Subtotal: $" . $row["subtotal"] . "<br>";
            echo "IGV: $" . $row["igv"] . "<br>";
            echo "Total: $" . $row["total"] . "<br>";
        }
    } else {
        echo "Pedido no encontrado.";
    }

    // Cierra la conexión
    sqlsrv_close($conn);
} else {
    // Redirige a la página principal si se accede directamente a consultar_pedido.php sin enviar datos
    header("Location: ../index.html");
}
?>
