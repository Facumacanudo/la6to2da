
<?php
$alumnos = [
	["nombre" => "Messi", "nota" => 8],
	["nombre" => "Feli Rosado", "nota" => 5],
	["nombre" => "Fran", "nota" => 9],
	["nombre" => "Facu", "nota" => 4],
	["nombre" => "Markito", "nota" => 7]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 4 - Alumnos</title>
</head>
<body>
	<h1>Tabla de alumnos</h1>
	<table border="1">
		<tr>
			<th>Nombre</th>
			<th>Nota</th>
			<th>Estado</th>
		</tr>
		<?php foreach ($alumnos as $alumno): ?>
			<tr>
				<td><?php echo $alumno["nombre"]; ?></td>
				<td><?php echo $alumno["nota"]; ?></td>
				<td>
					<?php
					if ($alumno["nota"] >= 6) {
						echo "Aprobado";
					} else {
						echo "Desaprobado";
					}
					?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>
