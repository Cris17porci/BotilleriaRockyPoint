<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Categorias
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
                        <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#addModal" >
                        + Agregar Categoria
                        </button>
                    </div>
                    <br><br>
                    <div class="form-group pull-right col-md-12" >
                        <input type="text" id="myInput" class="search form-control" placeholder="Buscar...">  
                    </div>
                    <span class="counter pull-right"></span>
                </div>
                <hr class="col-md-11">
                <div class="row" style="width: 119% !important;" >
                    <div class="col-md-10" style="    margin-right: -127px !important;" >
                        <table class="table table-hover table-bordered results table-sm ">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Opciones</th>
                                </tr>
                                <tr class="warning no-result">
                                    <td colspan="4"><i class="fa fa-warning"></i> No hay nada</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($categorias)): ?>
                                    <?php foreach ($categorias as $categoria): ?>
                                        <tr>
                                            <td><?php echo $categoria->id; ?></td>
                                            <td><?php echo $categoria->nombre; ?></td>
                                            <td><?php echo $categoria->descripcion; ?></td>
                                            <td>
                                                <div class="btn-group" style="text-align: right">
                                                    <a href="#" class="btn btn-info">
                                                        <span class="fa fa-eye"></span>
                                                    </a>
                                                    <button  type="button" data-toggle="modal" data-target="#editModal" onclick="selCategoria('<?php echo $categoria->id; ?>','<?php echo $categoria->nombre; ?>', '<?php echo $categoria->descripcion; ?>')" class="btn btn-warning">
                                                        <span class="fa fa-edit"></span>
                                                    </button>
                                                    <a href="#" class="btn btn-danger">
                                                        <span class="fa fa-remove"></span>
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


<!-- /.content-wrapper -->
