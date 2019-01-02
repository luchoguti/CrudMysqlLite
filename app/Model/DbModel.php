<?php

/**
* 
*/

class DbModel
{
	
    public static function getconnection(){

    	//Maquina Local
		$nombre_servidor = "localhost";
		$puerto="3306";
		$nombre_usuario = "root";
		$contrasena = "passWordDataBase";
		$nombre_bd = "nameDataBase";

		$conexion = new mysqli($nombre_servidor.':'.$puerto,$nombre_usuario,$contrasena,$nombre_bd);
        $conexion->query("SET NAME 'utf8'");
		if (!$conexion){
			die("No ha sido posible establecer la conexión con la base de datos.");
		}else{
			return($conexion);
		}
                
    }


}




?>