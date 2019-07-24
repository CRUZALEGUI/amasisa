<?php

class Carrito_model extends CI_Model{

	function __construct(){
		parent::__construct();
	}


	public function findAll(){
		
		return $this->db->get('productos')->result();		
		
	}

	public function find($ID_PRODUCTO){

		$this->db->where('ID_PRODUCTO',$ID_PRODUCTO);		
		return $this->db->get('productos')->row();		
		
	}

	public function descontar_stock($data){
		$id=$data['rowid'];
		$cant=$data['qty'];
		//convertimos string a number 

		//$cantidad=(int)$cant;

		
		$resultado=$this->db->query("SELECT STOCK FROM productos WHERE ID_PRODUCTO={$id}")->result();
		$stock=(int)$resultado;


		$n_stock= $stock- $cantidad;
		

		$this->db->query("UPDATE productos SET STOCK={$new_stock} WHERE ID_PRODUCTO={$id}");
		
	}

	



}
