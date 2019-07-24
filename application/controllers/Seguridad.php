<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seguridad extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Seguridad_model');
				$this->load->database('app_amasisa');
		$this->load->model('Auth');
		$this->load->library(array('form_validation','session'));
		$this->load->helper(array('auth/login_rules'));
		
	}
	
	public function index()
	{
					if($this->session->userdata('is_logged')){
					$this->load->view('administrador/seguridad/seguridad');
				}
				else{
					show_404();
				}

	}
	public function registrar()
	{
					if($this->session->userdata('is_logged')){
					$this->load->view('administrador/seguridad/registrar_usuarios');
				}
				else{
					show_404();
				}
	}

	
	public function ver_usuarios()
	{
					if($this->session->userdata('is_logged')){
					$usuarios = $this->Seguridad_model->listar_usuarios();
					$this->load->view('administrador/seguridad/ver_usuarios', array("usuarios" => $usuarios));
				}
				else{
					show_404();
				}
	}


	public function registrar_usuarios(){
					if($this->session->userdata('is_logged')){
					$param['nombre'] = $this->input->post('nombre');
					$param['apellidos'] = $this->input->post('apellidos');
					$param['edad'] = $this->input->post('edad');
					$param['dni'] = $this->input->post('dni');
					$param['telefono'] = $this->input->post('telefono');
					$param['direccion'] = $this->input->post('direccion');
					$param['correo'] = $this->input->post('correo');
					$param['contrasena'] = $this->input->post('contrasena');
					$param['tipo_usuario'] = $this->input->post('tipo_usuario');


					$this->Seguridad_model->registrar_usuarios($param);
					$this->load->view('administrador/seguridad/seguridad');
				}
				else{
					show_404();
				}

	}


	

	public function ver_tipo_producto()
	{
					if($this->session->userdata('is_logged')){
					$tipo = $this->Mantenimiento_model->listar_tipo_producto();
					$this->load->view('administrador/mantenimiento/ver_tipo_producto', array("tipo" => $tipo));
				}
				else{
					show_404();
				}
	}
	public function editar_tipo_producto($ID_TIPO_PRODUCTO){	

				
					if($this->session->userdata('is_logged')){
					$ID_TIPO_PRODUCTO = $this->db->escape((int)$ID_TIPO_PRODUCTO);
					$tipo = $this->Mantenimiento_model->ver_editar_tipo_producto($ID_TIPO_PRODUCTO);
					$this->load->view('administrador/mantenimiento/editar_tipo_producto',compact('tipo'));
				}
				else{
					show_404();
				}

		
		
	}

}