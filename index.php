<!-- guardar_config.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $api1 = $_POST['api1'];
    $api2 = $_POST['api2'];
    $min = $_POST['min'];
    $max = $_POST['max'];

    // Guardar datos en archivo
    $datos = "$api1,$api2,$min,$max";
    file_put_contents("config.txt", $datos);
    echo "✅ Configuración guardada.";
}
?>
<html>
   <form method="post">
    <label>API 1: <input type="text" name="api1"></label><br>
    <label>API 2: <input type="text" name="api2"></label><br>
    <label>Valor Mínimo: <input type="number" name="min" step="any"></label><br>
    <label>Valor Máximo: <input type="number" name="max" step="any"></label><br><br>
    <button type="submit">Guardar</button>
</form>
 
</html>
