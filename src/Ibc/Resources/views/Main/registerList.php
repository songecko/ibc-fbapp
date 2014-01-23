<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/registerListStyle.css" />
    <style type="text/css">
.logo
{
    text-align: center;
}
</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="logo">
                    <img src="../images/logo.png"/> 
                </a>
            </div>
        </div>
        <div class="row">
            <div>
                <div class="mini-layout"> 
					<div><a href="../index.php/descargar-excel">Descargar Excel</a></div>
                    <table class='table table-bordered'>
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
				</div>
			</div>
		</div>
	</div>
</body>
</html>