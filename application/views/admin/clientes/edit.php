<div class="modal fade" id="editClientModal" tabindex="-1" role="dialog" aria-labelledby="editClientModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-blue">
        <h5 class="modal-title" id="editClientModal">Editar Cliente</h5>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <?php if($this->session->flashdata("error")): ?>
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <p> <i class="icon fa fa-ban"></i> <?php echo $this->session->flashdata("error"); ?></p>
            </div>
          <?php endif; ?>
          <form action="<?php echo base_url(); ?>mantenimiento/clientes/update" method="POST">
            <input type="hidden" name="idCliente" id="idCliente" value="idCliente">
			<div class="form-group">
				<label for="rut">Rut:</label>
				<input type="text" disabled class="form-control" id="rut" name="rut" value="rut">
			</div>
			<div class="form-group">
				<label for="nombres">Nombre:</label>
				<input type="text"  class="form-control" id="nombres" name="nombres"  value="nombres">
			</div>
			<div class="form-group">
				<label for="apellidos">Apellido:</label>
				<input type="text"  class="form-control" id="apellidos" name="apellidos"  value="apellidos">
			</div>
			<div class="form-group">
				<label for="telefono">Telefono:</label>
				<input type="text"  class="form-control" id="telefono" name="telefono" value="telefono">
			</div>
			<div class="form-group">
				<label for="direccion">Direccion:</label>
				<input type="text"  class="form-control" id="direccion" name="direccion" value="direccion">
			</div>
			<div class="form-group">
				<label for="empresa">Empresa:</label>
				<input type="text"  class="form-control" id="empresa" name="empresa" value="empresa">
			</div>
			<div class="modal-footer">
              <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary pull-left">Actualizar</button>
            </div>
          </form>                
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>