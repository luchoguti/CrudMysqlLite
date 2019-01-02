<?php 

$controller_default='Aspirante';

if(!isset($_REQUEST['controller'])){

	require_once 'app/Controller/'.$controller_default.'Controller.php';
	$controller = $controller_default.'Controller';
	$controller = new $controller;
	$controller->listarAspirante();

}else{

	//obtenemos el controlador que queremos cargar.
	$controller = strtolower($_REQUEST['controller']);
	$accion= isset($_REQUEST['action'])?$_REQUEST['action']:'index';

	//instaciamos el controlador
	require_once 'app/Controller/'.$controller.'Controller.php';
	$controller = $controller.'Controller';
	$controller = new $controller;

	//Llama la accion
	call_user_func(array($controller,$accion));	

}



?>