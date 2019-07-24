<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class administrador extends CI_Controller {
	function __construct(){
			parent::__construct();
			$this->load->library(array('session'));
		}

	
	public function index(){
				if($this->session->userdata('is_logged')){
				$this->load->view('administrador/administrador');
				
			}else{
			
				show_404();
				$this->load->view('Inicio_cliente');
			}
		}
	}
	
?>
