<?php 

/**
* 
*/

require_once __DIR__.'/../Model/AspiranteModel.php';

class AspiranteController
{


    private $model_aspirantes;
    protected $ruta_publica;

    function __construct() {
        $this->model_aspirantes = new AspiranteModel();
        $name_project=explode('/',$_SERVER['REQUEST_URI'] );
        $this->ruta_publica=$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/'.$name_project[1].'/';
    }

    public function listarAspirante(){

        //header
        //las vista que requiera
        //footer

        $title = "Aspirantes";
        $id = NULL;
        $dataAspirante = $this->model_aspirantes->getAspirante($id);
        $ruta_publica = $this->ruta_publica;
        require_once 'app/View/header.php';
        require_once 'app/View/aspirante/viewListarAspirante.php';
        require_once 'app/View/footer.php';

    }
    public function editarAspirante(){

        $ruta_publica = $this->ruta_publica;
 
        $data = null;
        if (isset($_REQUEST['_id'])) {
            $dataConsulta = $this->model_aspirantes->getAspirante($_REQUEST['_id']);
            if($dataConsulta['state']){
                $data = $dataConsulta['msg'][0];
            }
            $title = "Editar Aspirante";
        }else{
            $title = "Nuevo Aspirante";
        }
        
        //require_once 'app/View/header.php';
        require_once 'app/View/aspirante/viewEditarAspirante.php';
        //require_once 'app/View/footer.php';
    }

     public function guardarDatosAspirante(){

        if ($_REQUEST['txt_id']!=0) {
            $resultado_cons=$this->model_aspirantes->AspiranteEdit($_REQUEST);
        }else{
            $resultado_cons=$this->model_aspirantes->AspiranteAdd($_REQUEST);
        }
        if($resultado_cons['state']){
            echo "<script>alert('".$resultado_cons['msg']."');</script>";
            header('Location: index.php?controller=Aspirante&action=listarAspirante');
        }else{
            echo "<script>alert(".$resultado_cons['msg'].")</script>";
        }
    }

    public function deleteAspirante(){
        $resultado_cons=$this->model_aspirantes->AspiranteDelete($_REQUEST['_id']);
        if($resultado_cons['state']){
            echo "<script>alert('".$resultado_cons['msg']."');</script>";
            header('Location: index.php?controller=Aspirante&action=listarAspirante');
        }else{
            echo "<script>alert(".$resultado_cons['msg'].")</script>";
        }
    }


}

?>