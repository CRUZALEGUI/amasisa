<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LOGIN1</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<!--<?= validation_errors(); ?>	
 <?= form_error('email'); ?>  //nombre del input --> 
	
	<!--<ul>  
		<?php foreach($menu as $item): ?> 
		<li><a href="<?php echo $item['url']; ?>"> <?php echo $item['title']; ?> </a></li>
	<?php endforeach;?>
	</ul>-->


<div class="container">
	<div class="row justify-content-lg-center">
		<div class="col-lg-6">
			<h1 id="central">LOGIN</h1>
			
			<form action="<?php echo base_url('Loguearse/validate') ?>" method="post" id="frm_login">
				  <div class="form-group" id="email">
				    <label for="exampleInputEmail1">Correo</label>
				    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				    <div class="invalid-feedback">
				    	el correo es vacio
				    </div>
				  </div>
				  <div class="form-group" id="password">
				    <label for="exampleInputPassword1">Contraseña</label>
				    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				  </div>
				
				<div class="form-group">
										
				  <button type="submit" class="btn btn-primary">Ingresar</button>
				  </div>
				  <div class="form-group" id="alert">
				  	
				  </div>	
			</form>
		</div>

	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php echo base_url('assets/js/auth/login.js'); ?>"></script>
</body>
</html>