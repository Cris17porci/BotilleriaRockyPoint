<div class="modal fade" id="removeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-red">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Categoria</h5>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <?php if($this->session->flashdata("error")): ?>
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <p> <i class="icon fa fa-ban"></i> <?php echo $this->session->flashdata("error"); ?></p>
            </div>
          <?php endif; ?>
          <form action="<?php echo base_url(); ?>/mantenimiento/categorias/remove" method="POST">
            <input type="hidden" name="delIdCategoria" id="delIdCategoria" value="delIdCategoria">
            <div class="form-group">
              <label for="nombre">Nombre:</label>
              <input type="text" disabled="true" class="form-control" id="delNombre" name="delNombre" value="delNombre">
            </div>
            <div class="form-group">
              <label for="descripcion">Descripcion:</label>
              <input type="text" disabled="true" class="form-control" id="delDescripcion" name="delDescripcion"  value="delDescripcion">
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