<form action="ej5_comparar.php" method="post">
    <label>Ingresá tu nombre (Versión POST):</label>
    <input type="text" name="nombre" value="Facu">
    <button type="submit">Enviar</button>
</form>

<?php
if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    echo "<h3>¡Hola, $nombre! Bienvenido.</h3>";
}
?>

<hr>
<h3>Diferencias observadas entre GET y POST:</h3>
<ul>
    <li><strong>1. Visibilidad en la URL:</strong> Con GET, el nombre se veía en la barra de direcciones (ej: <code>?nombre=Facu</code>). Con POST, la URL queda limpia y los datos viajan ocultos en el cuerpo de la petición.</li>
    <li><strong>2. Seguridad y Límite:</strong> POST es más seguro para datos sensibles (como contraseñas en el Ejercicio 2) y permite enviar mucha más cantidad de información que GET, el cual está limitado por la longitud de la URL.</li>
</ul>
