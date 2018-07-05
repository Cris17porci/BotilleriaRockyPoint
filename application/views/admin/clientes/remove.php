<div class="modal fade" id="removeClientModal" tabindex="-1" role="dialog" aria-labelledby="removeClientModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-red">
        <h5 class="modal-title" id="removeClientModal">Eliminar Categoria</h5>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <?php if($this->session->flashdata("error")): ?>
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <p> <i class="icon fa fa-ban"></i> <?php echo $this->session->flashdata("error"); ?></p>
            </div>
          <?php endif; ?>
          <form action="<?php echo base_url(); ?>mantenimiento/clientes/remove" method="POST">
            <input type="hidden" name="delIdCliente" id="delIdCliente" value="delIdCliente">
            <div class="form-group">
              <label for="delRut">Rut:</label>
              <input type="text" disabled class="form-control" id="delRut" name="delRut" value="delRut">
            </div>
            <div class="form-group">
              <label for="delNombres">Nombre:</label>
              <input type="text" disabled class="form-control" id="delNombres" name="delNombres"  value="delNombres">
            </div>
            <div class="form-group">
              <label for="delApellidos">Apellido:</label>
              <input type="text" disabled  class="form-control" id="delApellidos" name="delApellidos"  value="delApellidos">
            </div>
            <div class="form-group">
              <label for="delTelefono">Telefono:</label>
              <input type="text" disabled class="form-control" id="delTelefono" name="delTelefono" value="delTelefono">
            </div>
            <div class="form-group">
              <label for="delDireccion">Direccion:</label>
              <input type="text" disabled  class="form-control" id="delDireccion" name="delDireccion" value="delDireccion">
            </div>
            <div class="form-group">
              <label for="delEmpresa">Empresa:</label>
              <input type="text" disabled class="form-control" id="delEmpresa" name="delEmpresa" value="delEmpresa">
            </div>
            <div class="modal-footer">
              <p><strong>Realmente Desea Eliminar?</strong></p>
              <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary pull-left">Eliminar</button>
            </div>
          </form>                
        </div>
      </div>
    </div>
  </div>
</div>