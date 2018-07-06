<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos_model extends CI_Model {


	public function getProductos()
	{
		$this->db->select("p.*,c.nombre as categoria");
		$this->db->from("productos p");
		$this->db->join("categorias c", "p.categoria_id = c.id");
		$this->db->where("p.estado", "1");
		$resultados = $this->db->get();
		return $resultados->result();
	}

}