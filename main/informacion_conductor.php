<?php
	echo "<div class='panel panel-primary contenedor_info_conductor text-center'>
			<div class='panel-heading'><span class='fa fa-file-text fa-2x'></span> Informacion del Conductor</div>
			<div class='panel-body'>
				<div class='col-md-6'>
					<img class='img-thumbnail img-rounded' width='300'  height='300' src='$_SESSION[foto]'><br><br>
				</div>
				<div class='col-md-6'>
					<label>Nombre = </label> $_SESSION[nombre]<br>
					<label>Apellido = </label> $_SESSION[apellido]<br>
					<label>Documento = </label> $_SESSION[documento]<br>
					<label>Edad = </label> $_SESSION[edad]<br>
					<label>Telefono = </label> $_SESSION[telefono]<br>
					<label>Fecha Nacimiento = </label> $_SESSION[fecha_nacimiento]<br>
					<label>Empresa = </label> $_SESSION[empresa]<br>
					<label>Placa = </label> $_SESSION[placa]<br>
					<label>Eps = </label> $_SESSION[eps]<br>
					<label>Arp = </label> $_SESSION[arp]
				</div>
			</div>
		</div>";
?>