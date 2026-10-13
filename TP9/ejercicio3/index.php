<?php
$notas = [
	"Matemática Aplicada" => 9,
	"Lab Apps" => 9,
	"Programacion" => 10,
	"Lab Hardware" => 10,
	"Inglés" => 7
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 3 - Notas</title>
</head>
<body>
	<h1>Notas por materia</h1>
	<?php foreach ($notas as $materia => $nota): ?>
		<p><?php echo $materia; ?>: <?php echo $nota; ?></p>
	<?php endforeach; ?>
</body>
</html>
