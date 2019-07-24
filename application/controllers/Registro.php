<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Usuario_model');
	}

	
	public function index()
	{
		$this->load->view('registro/registrarse');
	}

	public function guardar(){

		$param['nombre'] = $this->input->post('nombre');
		$param['apellidos'] = $this->input->post('apellidos');
		$param['edad'] = $this->input->post('edad');
		$param['dni'] = $this->input->post('dni');
		$param['telefono'] = $this->input->post('telefono');
		$param['direccion'] = $this->input->post('direccion');
		$param['correo'] = $this->input->post('correo');
		$param['contrasena'] = $this->input->post('contrasena');


		$this->Usuario_model->guardar($param);
		$this->load->view('inicio_cliente');

	}
}
