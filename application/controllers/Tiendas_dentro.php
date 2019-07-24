<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tiendas_dentro extends CI_Controller {

	
	public function index()
	{
						if($this->session->userdata('is_logged')){
						$this->load->view('tiendas_dentro');
					}
					else{
						show_404();
					}
	}
}