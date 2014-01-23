<html>
	<table>
		<tr>
			<th>Nombre</th>
			<th>Apellido</th> 
			<th>Teléfono</th>
			<th>Email</th>
			<th>Recinto</th>
			<th>Programa de estudio</th>
			<th>Año de graduación</th>
			<th>Quiere recibir email?</th>
		</tr>
		<?php while($fila = mysql_fetch_array($result, MYSQL_ASSOC)): ?>
		<tr>
			<td><?php echo utf8_encode($fila["name"]) ?></td>
			<td><?php echo utf8_encode($fila["lastname"]) ?></td>
			<td><?php echo $fila["phone"] ?></td>
			<td><?php echo $fila["email"] ?></td>
			<td><?php echo $fila["recinto"] ?></td>
			<td><?php echo $fila["programa"] ?></td>
			<td><?php echo $fila["anio"] ?></td>
			<td><?php echo ($fila["newsletter"]==1)?"SI":"NO";  ?></td>
		</tr>
		<?php endwhile  ?>  		 
	</table>  
</html>