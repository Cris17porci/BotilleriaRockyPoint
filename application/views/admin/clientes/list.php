<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Clientes
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
                        <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#addClienteModal" >
                        + Agregar Cliente
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
                        <table  class="table table-bordered table-hover results table-sm ">
                            <thead>
                                <tr>
                                    <th>Rut</th>
                                    <th>Nombre</th>
                                    <th>Telefono</th>
                                    <th>Direccion</th>
                                    <th>Empresa</th>
                                    <th>Opciones</th>
                                </tr>
                                <tr class="warning no-result">
                                    <td colspan="4"><i class="fa fa-warning"></i> No hay nada</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($clientes)): ?>
                                    <?php foreach ($clientes as $cliente): ?>
                                        <tr>
                                            <td><?php echo $cliente->rut; ?></td>
                                            <td><?php echo $cliente->nombres; ?> <?php echo $cliente->apellidos; ?></td>
                                            <td><?php echo $cliente->telefono; ?></td>
                                            <td><?php echo $cliente->direccion; ?></td>
                                            <td><?php echo $cliente->empresa; ?></td>
                                            <td>
                                                <div class="btn-group" style="text-align: right">
                                                    <button id="btn-view" type="button" data-toggle="modal" data-target="#viewClientModal" class="btn btn-view btn-info" value="<?php echo $cliente->rut; ?>" data-backdrop="static" data-keyboard="false" >
                                                        <span class="fa fa-search"></span>
                                                    </button>
                                                    <button   type="button" data-toggle="modal" data-target="#editClientModal" onclick="selCliente('<?php echo $cliente->id; ?>','<?php echo $cliente->rut; ?>','<?php echo $cliente->nombres; ?>', '<?php echo $cliente->apellidos; ?>', '<?php echo $cliente->telefono; ?>', '<?php echo $cliente->direccion; ?>', '<?php echo $cliente->empresa; ?>')" class="btn btn-warning" data-backdrop="static" data-keyboard="false">
                                                        <span class="fa fa-pencil"></span>
                                                    </button>
                                                    <button  type="button" data-toggle="modal" data-target="#removeClientModal" onclick="delCliente('<?php echo $cliente->id; ?>','<?php echo $cliente->rut; ?>','<?php echo $cliente->nombres; ?>', '<?php echo $cliente->apellidos; ?>', '<?php echo $cliente->telefono; ?>', '<?php echo $cliente->direccion; ?>', '<?php echo $cliente->empresa; ?>')" class="btn btn-danger" data-backdrop="static" data-keyboard="false">
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

<div class="modal fade" id="viewClientModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h5 class="modal-title">Informacion del Cliente</h5>
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
