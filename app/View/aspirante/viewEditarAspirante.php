<form class="form-horizontal" action="index.php?controller=Aspirante&action=guardarDatosAspirante" method="post">
    <input type="hidden" name="txt_id" value="<?php echo ($data['id']!=0)?$data['id']:"0"; ?>">
    <fieldset>
    <!-- Form Name -->
    <legend>Registration Hoteles</legend>

    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Nombre:</label>  
      <div class="col-md-4">
        <input name="nombres" type="text" placeholder="Nom.Aspirante" class="form-control input-md" required="" value="<?php echo $data['nombres'];?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Tipo de Identificación:</label>  
      <div class="col-md-4">
        <select name="tipo_ident" class="form-control input-md" required="">
          <option value="">Tipo Ident.Aspirante</option>
          <option value="1" <?php if($data['tipo_ident_id']==1){echo 'selected';}?> >cedula</option>
          <option value="2" <?php if($data['tipo_ident_id']==2){echo 'selected';}?> >pasaporte</option>
          <option value="3" <?php if($data['tipo_ident_id']==3){echo 'selected';}?> >cedula extranjeria</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Numero de Identificación:</label>  
      <div class="col-md-4">
        <input name="num_ident" type="text" placeholder="Num Ident.Aspirante" class="form-control input-md" required="" value="<?php echo $data['num_ident'];?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Número teléfono/móvil:</label>  
      <div class="col-md-4">
        <input name="num_telefono" type="text" placeholder="Num tel.Aspirante" class="form-control input-md" required="" value="<?php echo $data['num_telefono'];?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Fecha de nacimiento:</label>  
      <div class="col-md-4">
        <input name="fecha_nacimiento" type="date" placeholder="Fecha Nac.Aspirante" class="form-control input-md" required="" value="<?php echo $data['fecha_nacimiento'];?>">
      </div>
    </div>
    <?php if(isset($data['id'])){?>
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Fecha creación</label>  
      <div class="col-md-4">
      <b> <?php echo $data['fecha_creacion'];  ?></b>
      </div>
    </div>
    <?php } ?>
    <!-- Button (Double) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="button1id"></label>
      <div class="col-md-8">
        <button id="button1id" name="button1id" class="btn btn-success">Guardar</button>
      </div>
    </div>
    </fieldset>
</form>