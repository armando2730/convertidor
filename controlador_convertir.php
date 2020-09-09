<?php
	extract($_POST);
	require_once('modelo_convertir.php');

	$objConvertidor = new Convertidor();

	$objConvertidor->setDatos($cantidad, $unidad);

	if(isset($btnconvertir)){
		switch ($unidad) {
			case 1: $resultado = $objConvertidor->convCm();
			$mensaje = "El resultado de la conversion es: ".$resultado. "Centimetros";
				break;
			
			case 2: $resultado = $objConvertidor->convMm();
			$mensaje = "El resultado de la conversion es: ".$resultado. "Milimetros";
				break;

			case 3: $resultado = $objConvertidor->convKm();
			$mensaje = "El resultado de la conversion es: ".$resultado. "Kilometros";
				break;

			

			default: echo "error";
				break;
		}

		include('index.php');
		return $mensaje;

	}else{
		
	}

	if(isset($btnconvertirl)){
		switch ($unidad) {
			case 4: $resultado = $objConvertidor->convdc();
			$mensaje1 = "El resultado de la conversion es: ".$resultado. "Decilitros";
				break;
			case 5: $resultado = $objConvertidor->convml();
			$mensaje1 = "El resultado de la conversion es: ".$resultado. "Mililitros";
				break;

				default: echo "error";
				break;
		}

		include('index.php');
		return $mensaje1;

	}else{
		
	}
	if(isset($btnconvertirk)){
		switch ($unidad) {
			case 6: $resultado = $objConvertidor->convkg();
			$mensaje2 = "El resultado de la conversion es: ".$resultado. "Gramos";
				break;
			case 7: $resultado = $objConvertidor->convkmi();
			$mensaje2 = "El resultado de la conversion es: ".$resultado. "Miligramos";
				break;

				default: echo "error";
				break;
		}

		include('index.php');
		return $mensaje2;

	}else{
		
	}
?>