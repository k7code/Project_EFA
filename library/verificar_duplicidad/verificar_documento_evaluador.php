<?php
	include "../conec.php";
	include "../../methods_backend.php";

	$numero_documento = $_REQUEST["valor_documento"];

	$consulta_Saber_si_Existe = "SELECT documento FROM reporte_usuario_activo WHERE documento = '$numero_documento'";
	$resultado = $conexion ->query($consulta_Saber_si_Existe);
	$count = $resultado->num_rows;

	if($count == 1) {
		message_mistake_validator("El numero documento que ingreso ya esta en el sistema.");
		enable_function_js('','numero_documento');
	}else{
		$buscar_En_Inactivos = "SELECT documento FROM reporte_usuario_inactivo WHERE documento = '$numero_documento'";
		$resultado = $conexion ->query($buscar_En_Inactivos);
		$count = $resultado->num_rows;

		if ($count == 1) {
			message_mistake_disabled_validator("El documento que ingreso pertenece a un Evaluador Inactivo , Por esta razon no se puede registrar.");
			enable_function_js('','numero_documento');
		}else {
			disable_function_js('','numero_documento');
		}
	}

	$conexion->close();
?>