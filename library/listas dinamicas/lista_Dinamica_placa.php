<label>Vehiculo</label><br>
<select name="placa" class='form-control l_vehiculo'>
<?php
	$consulta="SELECT * FROM reporte_vehiculo";

	$resultado = $conexion->query($consulta) or die($conexion->error." en la línea ".(__LINE__‐1));
	$count = $resultado->num_rows;

	if($count>=1)
	{		
		while($fila=mysqli_fetch_array($resultado)){
			echo "<option value='$fila[id_vehiculo]'> $fila[placa] </option>";
		}
	}
?>
</select><br><br>