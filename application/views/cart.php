<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CARRITO</title>
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
			      <a class="navbar-brand" href="<?php echo base_url('Inicio_cliente');?>">INICIO</a>
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
			        <li><a href="<?php echo base_url('carrito');?>">Carrito</a></li>
			        <li class="dropdown">
			          <a href="<?php echo base_url('Loguearse/logout'); ?>" class="">Cerrar Sesión<b class=""></b></a>

			        </li>

			            <!-- <li><a href="#">Ayuda</a></li> -->
			          </ul>
			        </li>
			      </ul>
			    </div>
			  </div>
			</nav>		
	</header>
	



	<br>
	
<section class="container">
	<div class="box-body">

<?php echo anchor('Productos_dentro','<< Continuar comprando');?>
<br><br>

<form method="POST" action="<?php echo base_url('shoppingCart/carrito');?>">
<!-- <?php echo form_open('shoppingCart/carrito'); ?> -->
<table id="example1" class="table table-striped table-bordered table-hover">
                   <thead>
                   <tr class="tableheader">
                     <th>OPCIONES</th>
                     <th>CANTIDAD</th>
                     
                     <th>PRODUCTO</th>
                    
                     <th>PRECIO</th>                  
                     <th>SUB-TOTAL</th>
                   
                   </tr>
                   </thead>
                   <tbody>
                   	<?php $i = 1; ?>
                   	


                        <?php foreach($this->cart->contents() as $items): ?>
                        	<?php echo form_hidden($i.'[rowid]', $items['id']); ?>
                        	
                            <tr>
                              <td align="center"><a href="<?php echo base_url('shoppingCart/delete/'.$items['rowid'])?>">Eliminar</a></td>
                              <td><?php echo form_input(array('type'=>"number", 'name' => $i.'[qty]', 'value' => $items['qty'],  'size' => '5','step'=>'1','min'=>"1" ) ); ?> </td>
                              
                              <td><?php echo $items['name'] ?></td>
                             
                              <td><?php echo $this->cart->format_number($items['price']); ?></td>
                              <td>$<?php echo $this->cart->format_number($items['subtotal']); ?></td>
                             
                              
                              
                            </tr>
                           <?php $i++; ?>
                            <?php endforeach; ?>

                            <tr>
        <td colspan="3"> </td>
        <td class="right"><strong>Total</strong></td>
        <td class="right">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
</tr>


          
                   </tbody>
               </table>

            	
<input type="submit" name="b1" value="Actualizar carrito" /> <input type="submit" name="b2" value="Realizar compra " />
 <!-- <p> <?php echo form_submit('shoppingCart/', 'Actualizar carrito'); ?></p> -->
 <!-- <center><button type="submit" name="funcion" value="actualizar" class="btn btn-info"><i class="fa fa-save"></i> ACTUALIZAR CARRITO </button>
 </center> -->
</form>  
               


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