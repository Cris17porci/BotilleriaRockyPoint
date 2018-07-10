<?php if(!empty($productos)): ?>
    <?php foreach ($productos as $producto): ?>
        <div class="form-group">
            <label for="codigo">Codigo:</label>
            <input type="text" disabled class="form-control" id="codigo" name="codigo" required value="<?php echo $producto->codigo; ?>">
        </div>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" disabled  class="form-control" id="nombre" name="nombre" value="<?php echo $producto->nombre; ?>" >
        </div>
        <div class="form-group">
            <label for="descripcion">Descripcion:</label>
            <input type="text" disabled  class="form-control" id="descripcion" name="descripcion" value="<?php echo $producto->descripcion; ?>" >
        </div>
        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="text" disabled class="form-control" min="1" step="any" id="precio" name="precio" value="<?php echo $producto->precio; ?>" />
        </div>
        <div class="form-group">
            <label for="stock">Stock:</label>
            <input type="text" disabled class="form-control" min="0" id="stock" name="stock" value="<?php echo $producto->stock; ?>">
        </div>
        <div class="form-group">
            <label for="categoria">Categoria:</label>
            <input type="text" disabled  class="form-control" id="categoria" name="categoria" value="<?php echo $producto->categoria; ?>" >
        </div>
    <?php endforeach; ?>
<?php endif; ?>