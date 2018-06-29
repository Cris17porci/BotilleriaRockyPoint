<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-blue">
        <h5 class="modal-title" id="exampleModalLabel">Editar Categoria</h5>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <?php if($this->session->flashdata("error")): ?>
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <p> <i class="icon fa fa-ban"></i> <?php echo $this->session->flashdata("error"); ?></p>
            </div>
          <?php endif; ?>
          <form action="<?php echo base_url(); ?>/mantenimiento/categorias/update" method="POST">
            <input type="hidden" name="idCategoria" id="idCategoria" value="idCategoria">
            <div class="form-group">
              <label for="nombre">Nombre:</label>
              <input type="text" class="form-control" id="nombre" name="nombre" value="nombre">
            </div>
            <div class="form-group">
              <label for="descripcion">Descripcion:</label>
              <input type="text" class="form-control" id="descripcion" name="descripcion"  value="descripcion">
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




