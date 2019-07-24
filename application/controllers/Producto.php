<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		$this->load->model('Productos_model');
	}

	public function index()
	{
		$producto = $this->Productos_model->listar_productos();
		$this->load->view('producto', array("producto" => $producto));
	}
}
