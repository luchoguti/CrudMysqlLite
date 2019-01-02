<div class="container containerPrincipal" style="margin-top:88px">
    <div>
        <h2>Listado de Aspirantes</h2>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombres</th>
                    <th>Tipo de Identificación</th>
                    <th>Numero de Identificación</th>
                    <th>Número teléfono/móvil</th>
                    <th>Fecha de nacimiento</th>
                    <th>Fecha y hora de creación</th>
                    <th>Accion</th>
                    <th><a type="button" class="btn btn-info" onclick="cargaVista('Aspirante','editarAspirante','null');"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span></a></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $htmlResponse='';
                    if($dataAspirante['state']){
                        foreach ($dataAspirante['msg']as $datosAspirante) {
                            $htmlResponse.='<tr>';
                            $htmlResponse.='<td>'.$datosAspirante['nombres'].'</td>';
                            $htmlResponse.='<td>'.$datosAspirante['tipo_ident'].'</td>';
                            $htmlResponse.='<td>'.$datosAspirante['num_ident'].'</td>';
                            $htmlResponse.='<td>'.$datosAspirante['num_telefono'].'</td>';
                            $htmlResponse.='<td>'.$datosAspirante['fecha_nacimiento'].'</td>';
                            $htmlResponse.='<td>'.$datosAspirante['fecha_creacion'].'</td>';
                            $htmlResponse.='<td><a type="button" class="btn btn-success"  onclick="cargaVista(\'Aspirante\',\'editarAspirante\','.$datosAspirante['id'].');">Editar</a><a type="button" class="btn btn-danger" href="#" onclick="eliminarIttem(\'Aspirante\',\'deleteAspirante\','.$datosAspirante['id'].');">Eliminar</button></td>';
                            $htmlResponse.='</tr>';
                        }
                    }else{
                        $htmlResponse.='<tr><td colspan="5">'.$dataAspirante['msg'].'</td></tr>';
                    }
                    echo $htmlResponse;
                ?>
            </tbody>
        </table>
    </div>
</div>