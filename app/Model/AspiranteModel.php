<?php 


/**
* 
*/
require_once "DbModel.php";

class AspiranteModel extends DbModel
{
    private $response;
    private $conexion;

	function __construct()
	{
		$this->conexion=DbModel::getconnection();
        $this->response = array();
	}

	public function getAspirante($id){
        if($id==NULL){
            $query=$this->conexion->query("SELECT * FROM `aspirante`");
        }else{
            $query=$this->conexion->query("SELECT *,CAST(tipo_ident AS UNSIGNED) as tipo_ident_id FROM `aspirante` where id='".$id."'");
        }
        if($query){
            $data_result= array();
            while ($result=$query->fetch_assoc()) {
                $data_result[]= $result;
            }
            $this->response['state']=true;
            $this->response['msg']=$data_result;
        }else{
            $this->response['state']=false;
            $this->response['msg']='Ocurrio un error al buscar los datos.';
        }
       
       return $this->response;
	}
    public function AspiranteAdd($request){
        $fecha_nac = date("Y-m-d", strtotime($request['fecha_nacimiento']));
        $query="INSERT INTO aspirante(nombres,tipo_ident,num_ident,num_telefono,fecha_nacimiento)VALUES('".$request['nombres']."','".$request['tipo_ident']."','".$request['num_ident']."','".$request['num_telefono']."','".$fecha_nac."')   ";
        $exeteQuery=$this->conexion->query($query);
        if($exeteQuery){
            $this->response['state']=true;
            $this->response['msg']='Se almaceno satisfactoriamente';
        }else{
            $this->response['state']=false;
            $this->response['msg']='Ocurrio un error al almacenar los datos.';
        }
        return $this->response;
    }

    public function AspiranteEdit($request){
        $fecha_nac = date("Y-m-d", strtotime($request['fecha_nacimiento']));
        $query="UPDATE aspirante SET nombres='".$request['nombres']."',tipo_ident='".$request['tipo_ident']."',num_ident='".$request['num_ident']."',num_telefono='".$request['num_telefono']."',fecha_nacimiento='".$fecha_nac."' WHERE id='".$request['txt_id']."'";
        $exeteQuery=$this->conexion->query($query);
        if($exeteQuery){
            $this->response['state']=true;
            $this->response['msg']='Se modifico satisfactoriamente';
        }else{
            $this->response['state']=false;
            $this->response['msg']='Ocurrio un error al editar los datos.';
        }
        return $this->response;

    }

    public function AspiranteDelete($id){

        $query="DELETE FROM aspirante WHERE id='".$id."'";
        $exeteQuery=$this->conexion->query($query);
        if($exeteQuery){
            $this->response['state']=true;
            $this->response['msg']='Se elimino satisfactoriamente';
        }else{
            $this->response['state']=false;
            $this->response['msg']='Ocurrio un error al eliminar los datos.';
        }
        return $this->response;

    }
}


?>