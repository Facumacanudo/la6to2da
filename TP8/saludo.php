<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function saludarPersona($nombre) {
    echo "<p>¡Hola, $nombre! Bienvenido/a.</p>";
}

// Llamadas a la función con 3 nombres distintos
saludarPersona("Feli");
saludarPersona("Advincula");
saludarPersona("Quiero keke");
?>
</body>
</html>