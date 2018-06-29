<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Categoria</h5>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <?php if($this->session->flashdata("error")): ?>
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <p> <i class="icon fa fa-ban"></i> <?php echo $this->session->flashdata("error"); ?></p>
                        </div>
                    <?php endif; ?>
                    <form action="<?php echo base_url(); ?>/mantenimiento/categorias/store" method="POST">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripcion:</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary pull-left">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>
