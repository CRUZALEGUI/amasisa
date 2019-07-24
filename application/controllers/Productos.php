<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Productos_model');
	}

	
	public function index()
	{
					if($this->session->userdata('is_logged')){
					$this->load->view('administrador/productos/productos');
				}
				else{
					show_404();
				}
	}

	public function registrar()
	{
					if($this->session->userdata('is_logged')){
					$this->load->view('administrador/productos/nuevo_producto');
				}
				else{
					show_404();
				}
	}

	public function guardar(){

							if($this->session->userdata('is_logged')){

							$param['nombre'] = $this->input->post('nombre');
							$param['descripcion'] = $this->input->post('descripcion');
							$param['imagen'] = $this->input->post('imagen');
							$param['precio'] = $this->input->post('precio');
							$param['stock'] = $this->input->post('stock');
							$param['unidad_medida'] = $this->input->post('unidad_medida');
							$param['categoria'] = $this->input->post('categoria');
							$param['tipo_material'] = $this->input->post('tipo_material');


							$this->Productos_model->guardar($param);
							$this->load->view('administrador/productos/productos');
						}
						else{
							show_404();
						}

	}

	public function ver_productos()
	{
						if($this->session->userdata('is_logged')){
						$producto = $this->Productos_model->listar_productos();
						$this->load->view('administrador/productos/ver_productos', array("producto" => $producto));
					}
					else{
						show_404();
					}
	}
}
