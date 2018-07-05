<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model extends CI_Model {


	public function getClientes()
	{
		$this->db->where("estado", "1");
		$resultados = $this->db->get("clientes");
		return $resultados->result();
	}

	public function save($data)
	{
		return $this->db->insert("clientes",$data);
	}

	public function getCliente($rut)
	{
		$this->db->where("rut", $rut);
		$resultado = $this->db->get("clientes");
		return $resultado->row();
	}

	public function updateCliente($idCliente,$rut,$data){
		$this->db->where("id", $idCliente);
		return $this->db->update("clientes", $data);
	}

	

}