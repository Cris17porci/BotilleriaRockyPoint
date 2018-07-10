<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Productos_model");
		$this->load->model("Categorias_model");

	}

	public function index()
	{
		$data = array(
			'productos' => $this->Productos_model->getProductos(),

		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/productos/list', $data);
		$this->load->view('layouts/footer');
		$this->add();
		$this->delete();
		
	}

	public function add()
	{
		$data = array(
			"categorias" => $this->Categorias_model->getCategorias()

		);
		$this->load->view('admin/productos/add',$data);
	}

	public function delete()
	{
		$this->load->view('admin/productos/remove');
	}

	public function store()
	{
		$codigo = $this->input->post("codigo");
		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
		$precio = $this->input->post("precio");
		$stock = $this->input->post("stock");
		$categoria = $this->input->post("categoria");
		$repeat = $this->input->post("repeat");

		$data =  array(
			'codigo' => $codigo,
			'nombre' => $nombre,
			'descripcion' => $descripcion,
			'precio' => $precio,
			'stock' => $stock,
			'categoria_id' => $categoria,
			'estado' => "1"
			);

		if ($this->Productos_model->save($data)) {
				redirect(base_url()."mantenimiento/productos");
		}else{
			$this->session->set_flashdata("error", "No se pudo guardar el cliente");
			redirect(base_url()."mantenimiento/productos/add");

		}

	}

	public function view($id){

		$data = array(
			'productos' => $this->Productos_model->getProductoCategoria($id)
		);
		$this->load->view("admin/productos/view", $data);
	}

	public function remove()
	{
		$delIdProducto = $this->input->post("delIdProducto");
		$data =  array(
			'estado' => 0
			);

		if ($this->Productos_model->updateProducto($delIdProducto,$data)) {
			redirect(base_url()."mantenimiento/productos");
		}else{
			$this->session->set_flashdata("error", "No se pudo actualizar la categoria");
			redirect(base_url()."mantenimiento/productos/remove/".$delIdProducto);

		}
	}



	
}
