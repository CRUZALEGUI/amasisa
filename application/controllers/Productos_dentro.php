<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos_dentro extends CI_Controller {



	function __construct(){
		parent::__construct();
		$this->load->model('Carrito_model');
	}
	
	public function index($index = 0)
	{$data['listProduct'] = $this->Carrito_model->findAll();
						if($this->session->userdata('is_logged')){
						
						$this->load->view('productos_dentro',$data);
					}
					else{
						show_404();
					}
	}
}