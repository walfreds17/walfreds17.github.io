<?php

/****************************************************************
Recibe los datos ingresados
****************************************************************/
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$comentario = $_POST['mensaje'];

if( empty($nombre) || empty($email) || empty($asunto) || empty($comentario) ) {
	
	$error = true;
	
}


/****************************************************************
Aquí debes ingresar el asunto del mail
****************************************************************/
$subject = 'Contacto desde internet de ' . $nombre ;
$comentario = stripcslashes($comentario);



/****************************************************************
Aquí se genera el cuerpo del mensaje
****************************************************************/
$mensaje = "De: $nombre \n
E-mail: $email \n
Asunto: $asunto \n
Mensaje: $comentario \n
\n";

$from = "From: $email\r\n";



/****************************************************************
ingresa mail receptor
****************************************************************/

if( !$error ) {
	mail("email@receptor.com", $subject, $mensaje, $from);
}
?>
				
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Emily's Shop / Venta ropa aesthetic</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="author" content="Emily Sarmiento">
	
	<link rel="stylesheet" href="style.css" >
	

	
	
</head>

<body>
	
	<section id="main-header" class="container cf">
		
		<a class="logo-header" href="index.html" title="Inicio">
			<span class="logo"><img src="img/logo.png" alt="logo" width="306" height="37"></span>
			<span class="slogan">Venta de ropa aesthetic</span>
		</a><!-- /#logo-header -->
		
		<span class="menu-trigger"><img src="img/menu-responsive.svg" alt="Abrir menú" /></span>
		
		<nav id="main-menu" role="navigation" class="closed">
			<ul>
				<li><a href="index.html">Inicio</a></li>
				<li><a href="servicios.html">Servicios</a></li>
				<li><a href="Articlos.html">Articulos</a></li>
				<li><a href="contacto.html">Contacto</a></li>
			</ul>
		</nav><!-- /#main-menu -->
		
	</section><!-- /#main-header -->
	
	<main id="content-area">
	
		<article class="single-page">
			
			
			<header class="page-header">
				<div class="container">
					
					<h1>Contacto</h1>
					
					<p>En esta tienda la gente no compra por razones logicas, compra por razones emocionales.</p>
				
				</div>
			</header><!-- /.page-header -->
			
			
			
			<div class="container page-content">
			
				<?php if( $error ) { ?>
				
					<div class="alerta">
						Hubo un error, por favor completa todos los campos.
					</div>
				
					<form action="enviar.php" method="post">
						
						<label for="nombre">Nombre:</label>
						<input type="text" id="nombre" name="nombre" placeholder="¿Cómo te llamas?" value="<?php echo $nombre; ?>" required />
						
						<label for="email">Email:</label>
						<input type="text" id="email" name="email" placeholder="¿A donde debería responderte?" value="<?php echo $email; ?>"  required />
						
						<label for="asunto">Asunto:</label>
						<input type="text" id="asunto" name="asunto" placeholder="¿Sobre qué quieres conversar?" value="<?php echo $asunto; ?>"  required />
						
						<label for="mensaje">Mensaje:</label>
						<textarea id="mensaje" name="mensaje" rows="8" placeholder="Aquí debes expresarte" required ><?php echo $comentario; ?></textarea>
						
						<input type="submit" value="Enviar mensaje" class="btn" />
					
					</form>
				
				<?php } else { ?>
				
					<p>Gracias por contactarte conmigo, responderé lo más pronto que pueda :)</p>
				
				<?php } ?>
			
			</div><!-- /.content -->
			
		</article><!-- /#single-page -->
	</main><!-- /#content-area -->
	
	
	<footer id="main-footer">
		
		<div class="footer-call-to-action">
			
			<p class="container">¿Tienes alguna duda más?<a href="contacto.html" class="btn">Contacto</a></p>
			
		</div><!-- /.footer-call-to-action -->
		
		<div id="bottom-footer" class="container cf">
			
			<div class="copyright">
				&copy; 2021 Emily's Shop
			</div><!-- /.copyright -->
			
			<nav id="footer-menu">
				<ul>
					<li><a href="index.html">Inicio</a></li>
					<li><a href="servicios.html">Servicios</a></li>
					<li><a href="Arituculos.html">Arituculos</a></li>
					<li><a href="contacto.html">Contacto</a></li>
				</ul>
			</nav><!-- /#footer-menu -->
			
		</div><!-- /#bottom-footer -->
		
	</footer><!-- /#main-footer -->


	<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="js/rem.min.js"></script>
	<script src="js/functions.js"></script>
	
</body>
</html>