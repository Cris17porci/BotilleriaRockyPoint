<div class="modal fade" id="addProductoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Producto</h5>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <?php if($this->session->flashdata("error")): ?>
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <p> <i class="icon fa fa-ban"></i> <?php echo $this->session->flashdata("error"); ?></p>
                        </div>
                    <?php endif; ?>
                    <form action="<?php echo base_url(); ?>/mantenimiento/productos/store" method="POST" name="add">
                        <div class="form-group">
                            <label for="codigo">Codigo:</label>
                            <input type="text" class="form-control" id="codigo" name="codigo" required>
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text"  class="form-control" id="nombre" name="nombre" >
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripcion:</label>
                            <input type="text"  class="form-control" id="descripcion" name="descripcion" >
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio:</label>
                            <input type="number" class="form-control" min="1" step="any" id="precio" name="precio"  />
                        </div>
                        <div class="form-group">
                            <label for="stock">Stock:</label>
                            <input type="number" class="form-control" min="0"id="stock" name="stock">
                        </div>
                        <div class="form-group">
                            <label for="categoria">Categoria:</label>
                            <select name="categoria" id="categoria" class="form-control">
                                <option value=" "></option>
                                <?php foreach($categorias as $categoria): ?>
                                    <option value="<?php echo($categoria->id) ?>"><?php echo $categoria->nombre;?> 
                                    </option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <input type="checkbox" name="repeat" id="repeat" value="repeat"> Volver a agregar otro producto<br>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary pull-left" onclick="cierramodal(repeat)" >Guardar</button>
                        </div>
                    </form>
                </div>
            </div> 
        </div>
    </div>
</div>

