<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>INICIO</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/estilos.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/slider.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap1.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/flexslider.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.css">	






	



</head>
<body>
	<section class="container">
		<div class="row">
			<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
			<img src="<?php echo base_url();?>imagenes/logoo.png">
			</div>
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
				<h3><a href="#">Mí Cuenta</a></h3>
			</div>
		</div>
	</section>
	<header class="container">		
			<nav class="navbar">
			  <div class="container-fluid">			    
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">			        
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="<?php echo base_url('Inicio_dentro');?>">INICIO</a>
			    </div>
			    <div class="collapse navbar-collapse" id="menu">
			      <ul class="navbar-nav">
			        <li class=""><a href="<?php echo base_url('Nosotros_dentro');?>">NOSOTROS</a></li>
			        <li><a href="<?php echo base_url('Tiendas_dentro');?>">TIENDAS</a></li>
			        <li class="">
			          <a href="<?php echo base_url('Productos_dentro');?>">PRODUCTOS <b class=""></b></a>
			          
				        </li>
			          </ul>
			        </li>
			      </ul>			      
			      <ul class="nav navbar-nav navbar-right">
			        <li><a href="<?php echo base_url('Carrito');?>">Carrito</a></li>
			        <li class="dropdown">
			          <a href="<?php echo base_url('Loguearse/logout'); ?>" class="">Cerrar Sesión<b class=""></b></a>

			        </li>
			      </ul>
			    </div>
			  </div>
			</nav>		
	</header>
	



	<br>
	
<section class="container">
	<div class="box-body">

<table id="example1" class="table table-striped table-bordered table-hover">
                   <thead>
                   <tr class="tableheader">
                     <th>ID</th>
                     <th>PRODUCTO</th>
                     <th>DESCRIPCION</th>
                     <th>IMAGEN</th>                  
                     <th>ACCIONES</th>
                   
                   </tr>
                   </thead>
                   <tbody>

                        <?php foreach($listProduct as $producto): ?>
                            <tr>
                              <td><?php echo $producto->ID_PRODUCTO ?></td>
                              <td><?php echo $producto->NOMBRE ?></td>
                              <td><?php echo $producto->DESCRIPCION ?></td>
                              <td><img src="<?php echo base_url();?>imagenes/<?php echo $producto->IMAGEN ;?>" width="70px" height="70px">  </td>
                             
                              
                              <td>
                              
                                <a href="<?php echo base_url('shoppingCart/buy/'.$producto->ID_PRODUCTO) ?>"><button type="button" class="btn btn-primary">AÑADIR AL CARRITO</button></a>
                                
                              </td>
                            </tr>
                            <?php endforeach; ?>


          
                   </tbody>
               </table>


             </div>
</section>
	



<script src="<?php echo base_url();?>http://code.jquery.com/jquery-latest.js"></script>
<script src="<?php echo base_url();?>js/jquery.js"></script>
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>	
<script src="<?php echo base_url();?>js/main.js"></script>
<script src="<?php echo base_url();?>js/slider.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/menuresponsive.js"></script>
<script src="<?php echo base_url();?>js/jquery-3.1.0.min.js"></script>
<script src="<?php echo base_url();?>js/jquery.flexslider.js"></script>
<script src="<?php echo base_url();?>js/main2.js"></script>

</body>
</html>