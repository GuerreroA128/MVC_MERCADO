<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Modelo-vista-controlador</title>
</head>
<body>
	<h1>Clientes dentro</h1>
	<table border="1">
		<tr>
		<td><strong>ID</strong></td>
			<td><strong>Nombre</strong></td>
			<td><strong>direccion</strong></td>
			<td><strong>C.P</strong></td>
			<td><strong>Ciudad</strong></td>
			<td><strong>E-mail</strong></td>
			<td><strong>Telefono</strong></td>
			<td><strong>Apellidos</strong></td>
		</tr>
		<?php
			for($i=0;$i<count($pd);$i++)
			{
				?>
					<tr>
					<td><?php echo $pd[$i]["id"]; ?></td>
						<td><?php echo $pd[$i]["nombre"]; ?></td>
						<td><?php echo $pd[$i]["direccion"]; ?></td>
						<td><?php echo $pd[$i]["cp"]; ?></td>
						<td><?php echo $pd[$i]["ciudad"]; ?></td>
						<td><?php echo $pd[$i]["e-mail"]; ?></td>
						<td><?php echo $pd[$i]["telefono"]; ?></td>
						<td><?php echo $pd[$i]["apellidos"]; ?></td>
					</tr>
				<?php
			}
		?>
	</table>
</body>
</html>