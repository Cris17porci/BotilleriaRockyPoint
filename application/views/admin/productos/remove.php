<div class="modal fade" id="removeProductoModal" tabindex="-1" role="dialog" aria-labelledby="removeClientModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-red">
        <h5 class="modal-title" id="removeClientModal">Eliminar Producto</h5>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <?php if($this->session->flashdata("error")): ?>
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <p> <i class="icon fa fa-ban"></i> <?php echo $this->session->flashdata("error"); ?></p>
            </div>
          <?php endif; ?>
          <form action="<?php echo base_url(); ?>mantenimiento/productos/remove" method="POST">
            <input type="hidden" name="delIdProducto" id="delIdProducto" value="delIdProducto">
            <div class="form-group">
              <label for="delCodigo">Codigo:</label>
              <input type="text" disabled class="form-control" id="delCodigo" name="delCodigo" value="delCodigo">
            </div>
            <div class="form-group">
                <label for="delNombre">Nombre:</label>
                <input type="text" disabled  class="form-control" id="delNombre" name="delNombre" value="delNombre" >
            </div>
            <div class="form-group">
                <label for="delDescripcion">Descripcion:</label>
                <input type="text" disabled  class="form-control" id="delDescripcion" name="delDescripcion" value="delDescripcion" >
            </div>
            <div class="form-group">
                <label for="delPrecio">Precio:</label>
                <input type="text" disabled class="form-control" min="1" step="any" id="delPrecio" name="delPrecio" value="delPrecio" />
            </div>
            <div class="form-group">
                <label for="delStock">Stock:</label>
                <input type="text" disabled class="form-control" min="0" id="delStock" name="delStock" value="delStock">
            </div>
            <div class="form-group">
                <label for="delCategoria">Categoria:</label>
                <input type="text" disabled  class="form-control" id="delCategoria" name="delCategoria" value="delCategoria" >
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