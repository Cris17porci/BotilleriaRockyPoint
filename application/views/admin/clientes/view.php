<div class="form-group">
    <label for="rut">Rut:</label>
    <input type="text" disabled class="form-control" id="rut" name="rut" value="<?php echo $cliente->rut; ?>">
</div>
<div class="form-group">
  <label for="nombres">Nombre:</label>
  <input type="text" disabled class="form-control" id="nombres" name="nombres"  value="<?php echo $cliente->nombres; ?> <?php echo $cliente->apellidos; ?>">
</div>
<div class="form-group">
    <label for="telefono">Telefono:</label>
    <input type="text" disabled class="form-control" id="telefono" name="telefono" value="<?php echo $cliente->telefono; ?>">
</div>
<div class="form-group">
    <label for="direccion">Direccion:</label>
    <input type="text" disabled class="form-control" id="direccion" name="direccion" value="<?php echo $cliente->direccion; ?>">
</div>
<div class="form-group">
    <label for="empresa">Empresa:</label>
    <input type="text" disabled class="form-control" id="empresa" name="empresa" value="<?php echo $cliente->empresa; ?>">
</div>