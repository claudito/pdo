<?php 
include'../clases/Conexion.php';
include'../clases/Alumno.php';
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Lista de Alumnos</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="table-responsive">
	<table class="table table-hover table-bordered">
		<thead>
			<tr class="info">
				<th>CÓDIGO</th>
				<th>NOMBRES</th>
				<th>APELLIDOS</th>
				<th>FECHA DE INGRESO</th>
			</tr>
		</thead>
		<tbody>
		<?php 
        $alumno  =  new Alumno();
		foreach ($alumno->lista() as $key => $value): ?>
		<tr>
		<td><?php echo $value['id']; ?></td>
		<td><?php echo $value['nombres']; ?></td>
		<td><?php echo $value['apellidos']; ?></td>
		<td><?php echo $value['fecha_creacion']; ?></td>
		</tr>	
		<?php endforeach ?>
		</tbody>
	</table>
</div>
</div>
</div>
</div>
</body>
</html>