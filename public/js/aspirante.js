function eliminarIttem(controller,action,id){
    if(confirm("Realmente desea eliminar?")){
    	window.location = "index.php?controller="+controller+"&action="+action+"&_id="+id+"";
    }
}
function cargaVista(dataController,dataAction,id){
	if(id=='null'){
		parametros={controller:dataController,action:dataAction};
	}else{
		parametros={controller:dataController,action:dataAction,_id:id};
	}
    $.ajax({
        data:  parametros, 
        url:   'index.php', 
        type:  'POST', 
        success:  function (response) { 
            $('.containerPrincipal').html(response);
        }
    });
}