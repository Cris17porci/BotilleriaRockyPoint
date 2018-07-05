<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Clientes_model");

	}

	public function index()
	{
		$data = array(
			'clientes' => $this->Clientes_model->getClientes(),

		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/clientes/list', $data);
		$this->load->view('layouts/footer');
		$this->edit();
		$this->add();
		$this->delete();
	}

	public function view($id){

		$data = array(
			'cliente' => $this->Clientes_model->getCliente($id) ,
		);
		$this->load->view("admin/clientes/view", $data);
	}

	public function add()
	{
		$this->load->view('admin/clientes/add');
	}

	public function edit()
	{
		$this->load->view('admin/clientes/edit');
	}
	public function delete()
	{
		$this->load->view('admin/clientes/remove');
	}

	public function update()
	{
		$idCliente = $this->input->post("idCliente");
		$rut = $this->input->post("rut");
		$nombres = $this->input->post("nombres");
		$apellidos = $this->input->post("apellidos");
		$telefono = $this->input->post("telefono");
		$direccion = $this->input->post("direccion");
		$empresa = $this->input->post("empresa");
		$data =  array(
			'nombres' => $nombres,
			'apellidos' => $apellidos,
			'telefono' => $telefono,
			'direccion' => $direccion,
			'empresa' => $empresa
			);
		if ($this->Clientes_model->updateCliente($idCliente,$rut,$data)){
			
			redirect(base_url()."mantenimiento/clientes");
		}else{
			$this->session->set_flashdata("error", "No se pudo actualizar el cliente");
			redirect(base_url()."mantenimiento/clientes/edit/".$idCliente);

		}
	}

	public function store()
	{
		$rut = $this->input->post("rut");
		$nombres = $this->input->post("nombres");
		$apellidos = $this->input->post("apellidos");
		$telefono = $this->input->post("telefono");
		$direccion = $this->input->post("direccion");
		$empresa = $this->input->post("empresa");

		$data =  array(
			'rut' => $rut,
			'nombres' => $nombres,
			'apellidos' => $apellidos,
			'telefono' => $telefono,
			'direccion' => $direccion,
			'estado' => "1",
			'empresa' => $empresa
			);

		if ($this->Clientes_model->save($data)) {
			redirect(base_url()."mantenimiento/clientes");
		}else{
			$this->session->set_flashdata("error", "No se pudo guardar el cliente");
			redirect(base_url()."mantenimiento/clientes/add");

		}

	}

	public function remove()
	{
		$idCliete = $this->input->post("delIdCliente");
		$rut = $this->input->post("delRut");
		$data =  array(
			'estado' => 0
			);

		if ($this->Clientes_model->updateCliente($idCliete,$rut,$data)) {
			redirect(base_url()."mantenimiento/clientes");
		}else{
			$this->session->set_flashdata("error", "No se pudo actualizar la categoria");
			redirect(base_url()."mantenimiento/clientes/remove/".$idCliete);

		}
	}

}
