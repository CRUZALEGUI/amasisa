<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShoppingCart extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('Carrito_model');
	}

	public function buy ($ID_PRODUCTO)
	{
		$product = $this->Carrito_model->find($ID_PRODUCTO);
		$data = array(
        'id'      => $product->ID_PRODUCTO,
        'qty'     => 1,
        'price'   => $product->PRECIO,
        'name'    => $product->NOMBRE
        
		);

		$this->cart->insert($data);
		$this->load->view('cart',$product);
	}

	public function delete($rowid)
	{
		
		$this->cart->update(array('rowid'=>$rowid,'qty'=>0));
		redirect('carrito');

	}

	public function update()
	{
		
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

		$this->cart->update($data);
		$this->load->view('cart');
		
	}

	public function carrito()
	{ 
		if(isset($_POST['b2']))
		{
			/* $data = array(
				'id' => $this->input->post("id"), 
				'cantidad' => $this->input->post("cantidad")
			); 

		   $this->Carrito_model->descontar_stock($data);
			$this->load->view('prueba1');

		} */
				
	
		 $i = 1;
		foreach ($this->cart->contents()as $items)
		{
				$data = array(
		        'rowid' => $this->input->post($i.'[rowid]'),
		        'qty'   =>  $this->input->post($i.'[qty]')
				);
		$i++;
		$this->Carrito_model->descontar_stock($data);
		}
		$this->load->view('prueba1');


		else{ 

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

				$this->cart->update($data);
				$this->load->view('cart');
				
		}

	}





}

