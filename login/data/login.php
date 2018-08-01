<?php 
	error_reporting(0);
	session_start();
	$post_variables = file_get_contents("php://input");
    $variable = json_decode($post_variables);

    $id= $variable->id;
    $nombre= $variable->nombre;
    $apellido= $variable->apellido;
    $email= $variable->email;
    $rol_id= $variable->rol_id;
    $nivel_id= $variable->nivel_id;
    $niveluser= $variable->niveluser;

    // exit('User: '. $id . ' ROL: ' .$rol_id);

    $_SESSION['id'] = $id;
	$_SESSION['nombre'] = $nombre;
	$_SESSION['apellido'] = $apellido;
	$_SESSION['email'] = $email;
	$_SESSION['rol_id'] = $rol_id;
	$_SESSION['nivel_id'] = $nivel_id;

	$arraySession = [
				$_SESSION['id'], 
				$_SESSION['nombre'], 
				$_SESSION['apellido'],
				$_SESSION['email'],
				$_SESSION['rol_id'],
				$_SESSION['nivel_id']
					];
							
			$json_query = json_encode($arraySession);
			$json_vista = html_entity_decode(json_encode($json_query));
			echo $json_query; 
 ?>