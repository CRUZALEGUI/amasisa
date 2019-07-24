<?php

class Productos_model extends CI_Model{

	function __construct(){
		parent::__construct();
	}


	public function listar(){
		$producto = $this->db->get('PRODUCTOS')->result();
		
		return $producto;
	}

	//PRODUCTO
	public function guardar($param){

		$campos =  array(
			'NOMBRE' => $param['nombre'],
			'DESCRIPCION' => $param['descripcion'],
			'IMAGEN' => $param['imagen'],
			'PRECIO' => $param['precio'],
			'STOCK' => $param['stock'],
			'UNIDAD_MEDIDA' => $param['unidad_medida'],
			'CATEGORIA' => $param['categoria'],
			'TIPO_MATERIAL' => $param['tipo_material'],

			
		);

		$this->db->insert('PRODUCTOS',$campos);
		

	}
	public function listar_productos(){
		$producto = $this->db->get('PRODUCTOS')->result();
		
		return $producto;
	}

	//TIPO PRODUCTO

	public function ver_editar_tipo_producto(int $id_tipo_producto)
	{
		
			return $this->db->query("SELECT ID_TIPO_PRODUCTO, TIPO FROM TIPO_PRODUCTO WHERE ID_TIPO_PRODUCTO={$id_tipo_producto}")->row();
	}

	public function actualizar_tipo_producto($param)
	{
			$id = $param['id_tipo_producto'] ;
			$campos  = array(
				'TIPO' => $param['tipo']
			);
			$this->db->where('ID_TIPO_PRODUCTO',$id);	
			$this->db->update('TIPO_PRODUCTO',$campos);
			
	}









	//UNIDAD DE MEDIDA
	public function guardar_unidad_medida($param){

		$campos =  array(
			'UNIDAD' => $param['unidad'],
			
		);

		$this->db->insert('UNIDAD_MEDIDA',$campos);
		

	}

	public function listar_unidad_medida(){
		$unidad = $this->db->get('UNIDAD_MEDIDA')->result();
		
		return $unidad;
	}

	public function ver_editar_unidad_medida(int $id_unidad_medida)
	{
		
			return $this->db->query("SELECT ID_UNIDAD_MEDIDA, UNIDAD FROM UNIDAD_MEDIDA WHERE ID_UNIDAD_MEDIDA={$id_unidad_medida}")->row();
	}


	public function actualizar_unidad_medida($param)
	{
			$id = $param['id_unidad_medida'] ;
			$campos  = array(
				'UNIDAD' => $param['unidad']
			);
			$this->db->where('ID_UNIDAD_MEDIDA',$id);	
			$this->db->update('UNIDAD_MEDIDA',$campos);
			
	}




	//CATEGORIA

	public function guardar_categoria($param){

		$campos =  array(
			'CATEGORIA' => $param['categoria']
			
		);

		$this->db->insert('CATEGORIA',$campos);
		

	}

	public function listar_categoria(){
		$categoria = $this->db->get('CATEGORIA')->result();
		
		return $categoria;
	}


	public function ver_editar_categoria(int $id_categoria)
	{
		
			return $this->db->query("SELECT ID_CATEGORIA, CATEGORIA FROM CATEGORIA WHERE ID_CATEGORIA={$id_categoria}")->row();
	}


	public function actualizar_categoria($param)
	{
			$id = $param['id_categoria'] ;
			$campos  = array(
				'CATEGORIA' => $param['categoria']
			);
			$this->db->where('ID_CATEGORIA',$id);	
			$this->db->update('CATEGORIA',$campos);
			
	}














	//TIPO DE MATERIAL

	public function guardar_nuevo_tipo_material($param){

		$campos =  array(
			'MATERIAL' => $param['tipo_material'],
			'DESCRIPCION' => $param['descripcion_tipo_material']
			
		);

		$this->db->insert('TIPO_MATERIAL',$campos);
		

	}


	public function eliminar(int $ID_TIPO_MATERIAL){
		
			return $this->db->query("DELETE FROM TIPO_MATERIAL WHERE ID_TIPO_MATERIAL={$ID_TIPO_MATERIAL}");
	}

	public function ver_editar_tipo_material(int $id_tipo_material)
	{
		
			return $this->db->query("SELECT ID_TIPO_MATERIAL, MATERIAL, DESCRIPCION FROM TIPO_MATERIAL WHERE ID_TIPO_MATERIAL={$id_tipo_material}")->row();
	}


	public function actualizar_tipo_material($param)
	{
			$id = $param['id_tipo_material'] ;
			$campos  = array(
				'MATERIAL' => $param['material'],
			'DESCRIPCION' => $param['descripcion_tipo_material']
			);
			$this->db->where('ID_TIPO_MATERIAL',$id);	
			$this->db->update('TIPO_MATERIAL',$campos);
			
	}







	





}