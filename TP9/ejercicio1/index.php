<?php
$tareas = [
	"Estudiar JS",
	"Estudiar PHP",
	"Ordenar el escritorio",
	"Pollerear",
	"Ir al gym"
];

array_push($tareas, "Repasar arreglos");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 1 - Tareas</title>
</head>
<body>
	<h1>Lista de tareas</h1>
	<ul>
		<?php foreach ($tareas as $tarea): ?>
			<li><?php echo $tarea; ?></li>
		<?php endforeach; ?>
	</ul>
	<p>Cantidad total de tareas: <?php echo count($tareas); ?></p>
</body>
</html>
