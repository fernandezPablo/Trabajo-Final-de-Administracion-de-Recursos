<?php 
	# SERVIDOR
	
	require_once "../Controller/ServicioController.php";

	/*
		Se recive a través del metodo file_get_contents
		el stream php://input que contiene el archivo JSON 
		generado en el cliente
	*/
	$data = file_get_contents("php://input");
	/*
		Se decodifica el string con formato JSON en un array
	*/
	$jsonDecoded = json_decode($data,true);
	/*
		Se genera un array con el resultado de la operación
	*/

	$result = array('msj' => "Peticion recibida",
	 'error' => "No se pudo identificar" );

	$peticion = array(
					'descripcion'=> $jsonDecoded['descripcion'],
					'motivo'=> $jsonDecoded['motivo'],
					'proposito'=>$jsonDecoded['proposito'],
					'tiempoEstimado'=>$jsonDecoded['tiempoEstimado'],
					'nombreSolicitante'=>$jsonDecoded['nombreSolicitante'],
					'fechaDeVencimiento'=>$jsonDecoded['fechaDeVencimiento'],
					'equipo'=>$jsonDecoded['equipo'],
					'idImpacto'=>$jsonDecoded['idImpacto'],
					'idPrioridad'=>$jsonDecoded['idPrioridad']); 

	if(isset($peticion)) {
		if(!(ServicioController::insertarPeticion($peticion)))
			echo "fallo al realizar el query";
	}


	/*
		Se genera un string en formato JSON a partir del array
		y se envia como salida a través de echo que será recivida
		por el cliente.
	*/
	echo json_encode($result);
 ?>