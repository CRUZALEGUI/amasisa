<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mantenimiento extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Mantenimiento_model');
	}
	
	public function index()
	{
					if($this->session->userdata('is_logged')){
					$this->load->view('administrador/mantenimiento/mantenimiento');
				}
				else{
					show_404();
				}
	}

	public function tipo_producto(){
					if($this->session->userdata('is_logged')){
					$this->load->view('administrador/mantenimiento/tipo_producto');
				}
				else{
					show_404();
				}
	}

	public function nuevo_tipo_producto(){
						if($this->session->userdata('is_logged')){
						$this->load->view('administrador/mantenimiento/nuevo_tipo_producto');
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

	public function actualizar_tipo_producto(){

						if($this->session->userdata('is_logged')){

						$param['id_tipo_producto'] = $this->input->post("id_tipo_producto");
						$param['tipo'] = $this->input->post('tipo');
						

						$this->Mantenimiento_model->actualizar_tipo_producto($param);
					    $this->load->view('administrador/mantenimiento/tipo_producto');	
					    }
					    else{
					    	show_404();
					    }		
	}





//SUBIR IMAGENES AL SERVIDOR


	public function subir_imagen(){
						if($this->session->userdata('is_logged')){
						$this->load->view('administrador/mantenimiento/subir_imagen');
					}
					else{
						show_404();
					}
	}

	public function cargar_imagen()
	{
		$mi_imagen = 'imagen';
	    $config['upload_path'] = "imagenes/";
	    $config['file_name'] = "";
	    $config['allowed_types'] = "*";
	    $config['max_size'] = "50000";
	    $config['max_width'] = "2000";
	    $config['max_height'] = "2000";

	    $this->load->library('upload', $config);

	    if (!$this->upload->do_upload($mi_imagen)) {
	        //*** ocurrio un error
	        $data['uploadError'] = $this->upload->display_errors();
	        echo $this->upload->display_errors();
	        return;
	    }

	    $data['uploadSuccess'] = $this->upload->data();
	    $this->load->view('administrador/mantenimiento/mantenimiento');


	}







	//UNIDAD DE MEDIDA

	public function unidad_medida()
	{
						if($this->session->userdata('is_logged')){
						$this->load->view('administrador/mantenimiento/unidad_medida');
					}
					else{
						show_404();
					}
	}

	public function nuevo_unidad_medida()
	{
					if($this->session->userdata('is_logged')){
					$this->load->view('administrador/mantenimiento/nuevo_unidad_medida');
				}
				else{
					show_404();
				}
	}

	public function guardar(){

		if($this->session->userdata('is_logged')){

		$param['tipo'] = $this->input->post('tipo');

		$this->Mantenimiento_model->guardar($param);
		$this->load->view('administrador/mantenimiento/tipo_producto');
	}
	else{
		show_404();
	}

	}


	public function guardar_nuevo_unidad_medida(){

						if($this->session->userdata('is_logged')){

						$param['unidad'] = $this->input->post('unidad');

						$this->Mantenimiento_model->guardar_unidad_medida($param);
						$this->load->view('administrador/mantenimiento/unidad_medida');
					}
					else{
						show_404();
					}

	}

	public function ver_unidad_medida()
	{

						if($this->session->userdata('is_logged')){
						$unidad = $this->Mantenimiento_model->listar_unidad_medida();
						$this->load->view('administrador/mantenimiento/ver_unidad_medida', array("unidad" => $unidad));
					}
					else{
						show_404();
					}
	}

	public function editar_unidad_medida($ID_UNIDAD_MEDIDA){	

						if($this->session->userdata('is_logged')){	
					
						$ID_UNIDAD_MEDIDA = $this->db->escape((int)$ID_UNIDAD_MEDIDA);
						$unidad = $this->Mantenimiento_model->ver_editar_unidad_medida($ID_UNIDAD_MEDIDA);
						$this->load->view('administrador/mantenimiento/editar_unidad_medida',compact('unidad'));
					}
					else{
						show_404();
					}

		
		
	}

	public function actualizar_unidad_medida(){
					if($this->session->userdata('is_logged')){	

					$param['id_unidad_medida'] = $this->input->post("id_unidad_medida");
					$param['unidad'] = $this->input->post('unidad');
					

					$this->Mantenimiento_model->actualizar_unidad_medida($param);
				    $this->load->view('administrador/mantenimiento/unidad_medida');	
				    }
				    else{
				    	show_404();
				    }		
	}









	//CATEGORIA

	public function categoria()
	{
					if($this->session->userdata('is_logged')){	
					$this->load->view('administrador/mantenimiento/categoria');
				}
				else{
					show_404();
				}
	}

	public function nueva_categoria()
	{
					if($this->session->userdata('is_logged')){
					$this->load->view('administrador/mantenimiento/nueva_categoria');
				}
				else{
					show_404();
				}
	}

	public function guardar_nueva_categoria(){

						if($this->session->userdata('is_logged')){

						$param['categoria'] = $this->input->post('categoria');

						$this->Mantenimiento_model->guardar_categoria($param);
						$this->load->view('administrador/mantenimiento/categoria');
					}
					else{
						show_404();
					}

	}

	public function ver_categoria()
	{
					if($this->session->userdata('is_logged')){
					$categoria = $this->Mantenimiento_model->listar_categoria();
					$this->load->view('administrador/mantenimiento/ver_categoria', array("categoria" => $categoria));
				}
				else{
					show_404();
				}
	}

	public function editar_categoria($ID_CATEGORIA){	

				if($this->session->userdata('is_logged')){	
			
				$ID_CATEGORIA = $this->db->escape((int)$ID_CATEGORIA);
				$categoria = $this->Mantenimiento_model->ver_editar_categoria($ID_CATEGORIA);
				$this->load->view('administrador/mantenimiento/editar_categoria',compact('categoria'));

			}
			else{
				show_404();
			}
		
	}

	public function actualizar_categoria(){

				if($this->session->userdata('is_logged')){	

				$param['id_categoria'] = $this->input->post("id_categoria");
				$param['categoria'] = $this->input->post('categoria');
				

				$this->Mantenimiento_model->actualizar_categoria($param);
			    $this->load->view('administrador/mantenimiento/categoria');	
			    }
			    else{
			    	show_404();
			    }		
	}











	//TIPO DE MATERIAL

	public function tipo_material()
	{
					if($this->session->userdata('is_logged')){	
					$this->load->view('administrador/mantenimiento/tipo_material');
				}
				else{
					show_404();
				}
	}
	public function nuevo_tipo_material()
	{
					if($this->session->userdata('is_logged')){	
					$this->load->view('administrador/mantenimiento/nuevo_tipo_material');
				}
				else{
					show_404();
				}
	}

	public function guardar_nuevo_tipo_material(){
					if($this->session->userdata('is_logged')){	

					$param['tipo_material'] = $this->input->post('tipo_material');
					$param['descripcion_tipo_material'] = $this->input->post('descripcion_tipo_material');

					$this->Mantenimiento_model->guardar_nuevo_tipo_material($param);
					$this->load->view('administrador/mantenimiento/tipo_material');
				}
				else{
					show_404();
				}

	}


	public function ver_tipo_material()
	{

					if($this->session->userdata('is_logged')){	
					$material = $this->Mantenimiento_model->listar();
					$this->load->view('administrador/mantenimiento/ver_tipo_material', array("material" => $material));
					//$this->load->view();
					
					}
					else{
						show_404();
					}
	}

	public function eliminar(int $ID_TIPO_MATERIAL){

					if($this->session->userdata('is_logged')){
						if ($this->Mantenimiento_model->eliminar($ID_TIPO_MATERIAL))
						{

							header("Location:".base_url('mantenimiento/ver_tipo_material'));
							
						}
					}
					else{
						show_404();
					}

	}

	public function editar(int $ID_TIPO_MATERIAL){

				if($this->session->userdata('is_logged')){

				$this->load->view('administrador/mantenimiento/editar_tipo_material');	
				}
				else{
					show_404();
				}		
	}



	public function editar_tipo_material($ID_TIPO_MATERIAL){

					if($this->session->userdata('is_logged')){		
				
					$ID_TIPO_MATERIAL = $this->db->escape((int)$ID_TIPO_MATERIAL);
					$material = $this->Mantenimiento_model->ver_editar_tipo_material($ID_TIPO_MATERIAL);
					$this->load->view('administrador/mantenimiento/editar_tipo_material',compact('material'));
				}
				else{
					show_404();
				}

		
		
	}


	public function actualizar_tipo_material(){
						if($this->session->userdata('is_logged')){		

						$param['id_tipo_material'] = $this->input->post("id_tipo_material");
						$param['material'] = $this->input->post('material');
						$param['descripcion_tipo_material'] = $this->input->post('descripcion_tipo_material');

						$this->Mantenimiento_model->actualizar_tipo_material($param);
					    $this->load->view('administrador/mantenimiento/tipo_material');	
					    }
					    else{
					    	show_404();
					    }		
	}

}
?>

