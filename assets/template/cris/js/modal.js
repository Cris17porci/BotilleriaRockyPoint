function selCategoria(idCategoria,nombre, descripcion){
	
	$('#idCategoria').val(idCategoria);
    $('#nombre').val(nombre);
    $('#descripcion').val(descripcion);  
};

function delCategoria(idCategoria,nombre, descripcion){
	
	$('#delIdCategoria').val(idCategoria);
    $('#delNombre').val(nombre);
    $('#delDescripcion').val(descripcion);  
};

function selCliente(idCliente,rut,nombres,apellidos,telefono,direccion,empresa){
	
	$('#idCliente').val(idCliente);
	$('#rut').val(rut);
    $('#nombres').val(nombres);
    $('#apellidos').val(apellidos);
    $('#telefono').val(telefono);  
    $('#direccion').val(direccion);
    $('#empresa').val(empresa);        
};

function delCliente(idCliente,rut,nombres,apellidos,telefono,direccion,empresa){
    
    $('#delIdCliente').val(idCliente);
    $('#delRut').val(rut);
    $('#delNombres').val(nombres);
    $('#delApellidos').val(apellidos);
    $('#delTelefono').val(telefono);  
    $('#delDireccion').val(direccion);
    $('#delEmpresa').val(empresa);        
};

function delProducto(idProducto,codigo,nombre,descripcion,precio,stock,categoria,empresa){
    
    $('#delIdProducto').val(idProducto);
    $('#delCodigo').val(codigo);
    $('#delNombre').val(nombre);
    $('#delDescripcion').val(descripcion);
    $('#delPrecio').val(precio);
    $('#delStock').val(stock);  
    $('#delCategoria').val(categoria);
    $('#delEmpresa').val(empresa);        
};

