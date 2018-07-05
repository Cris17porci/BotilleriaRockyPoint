<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model");

	}

	public function index()
	{
		
		if ($this->session->userdata("login")) {
			redirect(base_url()."dashboard");
		}else{
			$this->load->view('admin/login');
		}

	}

	public function login(){

		$username = $this->input->post("rut");
		$password = $this->input->post("password");
		echo $username;
		echo $password;
		$res = $this->Usuarios_model->login($username, sha1($password));
		if (!$res) {
			$this->session->set_flashdata("error","El Usuario y/o Contraseña son incorrectos");
			redirect(base_url());
		}else{
			$data = array(
				'id' => $res->rut,
				'nombre' => $res->nombres,
				'apellido' => $res->apellidos,
				'rol' => $res->rol_id,
				'login' => TRUE
			);
			echo $data;
			$this->session->set_userdata($data);
			redirect(base_url()."dashboard");
		}

	}
	public function logout(){
		$this->session-> sess_destroy();
		redirect(base_url());
	}
}