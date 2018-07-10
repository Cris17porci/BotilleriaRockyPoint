<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Productos
        <small>Listado</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#addProductoModal" >
                        + Agregar Producto
                        </button>
                    </div>
                    <br><br>
                    <div class="form-group pull-right col-md-12" >
                        <input type="text" id="myInput" autofocus  class="search form-control" placeholder="Buscar...">  
                    </div>
                    <span class="counter pull-right"></span>
                </div>
                <hr class="col-md-11">
                <div class="row" style="width: 119% !important;" >
                    <div class="col-md-10" style="    margin-right: -127px !important;" >
                        <table  class="table table-bordered table-hover results table-sm ">
                            <thead>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Precio</th>
                                    <th>Stock</th>
                                    <th>Categoria</th>
                                    <th>Opciones</th>
                                </tr>
                                <tr class="warning no-result">
                                    <td colspan="4"><i class="fa fa-warning"></i> No hay nada</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($productos)): ?>
                                    <?php foreach ($productos as $producto): ?>
                                        <tr>
                                            <td><?php echo $producto->codigo; ?></td>
                                            <td><?php echo $producto->nombre; ?></td>
                                            <td><?php echo $producto->descripcion; ?></td>
                                            <td><?php echo $producto->precio; ?></td>
                                            <td><?php echo $producto->stock; ?></td>
                                            <td><?php echo $producto->categoria; ?></td>
                                            <td>
                                                <div class="btn-group" style="text-align: right">
                                                    <button id="btn-view" type="button" data-toggle="modal" data-target="#viewProductoModal" class="btn btn-view btn-info" value="<?php echo $producto->id; ?>" data-backdrop="static" data-keyboard="false" >
                                                        <span class="fa fa-search"></span>
                                                    </button>
                                                    <button   type="button" data-toggle="modal" data-target="#editProductoModal" onclick="selProducto('<?php echo $producto->id; ?>','<?php echo $producto->codigo; ?>','<?php echo $producto->nombre; ?>', '<?php echo $producto->descripcion; ?>', '<?php echo $producto->precio; ?>', '<?php echo $producto->stock; ?>', '<?php echo $producto->categoria_id; ?>')" class="btn btn-warning" data-backdrop="static" data-keyboard="false">
                                                        <span class="fa fa-pencil"></span>
                                                    </button>
                                                    <button  type="button" data-toggle="modal" data-target="#removeProductoModal" onclick="delProducto('<?php echo $producto->id; ?>','<?php echo $producto->codigo; ?>','<?php echo $producto->nombre; ?>', '<?php echo $producto->descripcion; ?>', '<?php echo $producto->precio; ?>', '<?php echo $producto->stock; ?>', '<?php echo $producto->categoria_id; ?>')" class="btn btn-danger" data-backdrop="static" data-keyboard="false">
                                                        <span class="fa fa-remove"></span>
                                                    </button>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>

<div class="modal fade" id="viewProductoModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h5 class="modal-title">Informacion del Producto</h5>
            </div>
            <div class="modal-body">
                <p>One fine body &hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-center" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- /.content-wrapper -->