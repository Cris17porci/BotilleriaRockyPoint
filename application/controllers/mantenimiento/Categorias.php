<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Categorias_model");

	}


	
	public function index()
	{
		$data = array(
			'categorias' => $this->Categorias_model->getCategorias(),

		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/categorias/list', $data);
		$this->load->view('layouts/footer');
		$this->edit();
		$this->add();
		

	}

	public function add()
	{
		$this->load->view('admin/categorias/add');
	}

	public function store()
	{
		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");

		$data =  array(
			'nombre' => $nombre,
			'descripcion' => $descripcion,
			'estado' => "1");

		if ($this->Categorias_model->save($data)) {
			redirect(base_url()."mantenimiento/categorias");
		}else{
			$this->session->set_flashdata("error", "No se pudo guardar la categoria");
			redirect(base_url()."mantenimiento/categorias/add");

		}

	}

	public function edit()
	{
		
		$this->load->view('admin/categorias/edit');
		
	}

	public function update()
	{
		$idCategoria = $this->input->post("idCategoria");
		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
		print_r($idCategoria) ;
		echo $nombre;
		$data =  array(
			'nombre' => $nombre,
			'descripcion' => $descripcion,
			);

		if ($this->Categorias_model->updateCategoria($idCategoria,$data)) {
			redirect(base_url()."mantenimiento/categorias");
		}else{
			$this->session->set_flashdata("error", "No se pudo actualizar la categoria");
			redirect(base_url()."mantenimiento/categorias/edit/".$idCategoria);

		}
	}
}
