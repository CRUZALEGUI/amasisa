<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrito extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('Productos_model');


	}

	public function index()
	{
						if($this->session->userdata('is_logged')){
						$this->load->view('cart');
					}
					else{
						show_404();
					}
	}

	public function hacer_pedido()
	{
						if($this->session->userdata('is_logged')){


								
												$i = 1;
								foreach ($this->cart->contents()as $items)
								{

										$data = array(
								        'rowid' => $this->input->post($i.'[rowid]'),
								        'qty'   =>  $this->input->post($i.'[qty]')
										);
										$i++;
								$this->cart->update($data);
								}
					}
					else{
						show_404();
					}
	}


	
	
	
}
