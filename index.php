<!DOCTYPE html>
<html lang="es">

<head>
	<title>Pago Deudas previsionales</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
	<meta name="description" content="Cambio forma de pagos">
	<meta name="author" content="Instituto de Previsión Social">
    <meta name="googlebot" content="noindex">
    <meta name="robots" content="noindex">
    
	<!--Favicon-->
	<link rel="shortcut icon" href="img/favicon.ico">
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->	
        
	<!--<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
	google analytics-->
	<!--<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-58769206-3', 'auto');
		ga('send', 'pageview');
	</script>-->
</head>
<body class="home-afp menu-sin-usuario">

	<div class="container-fluid relative flowtype" id="inclusive">
		
		<div class="row wrapper-general">

			<!-- CONTENEDOR CUPON -->
			<section class="contenedor-inicio">
				<div class="ocupado" style='display:none;' id="ocupado">
					<div class="alert alert-warning" role="alert"> 
						<strong>Momento!</strong> En este momento el sitio web esta ocupado<br>en segundos estará disponible.
					</div>
				</div>
				<div class="modulo-consulta cambio">
					<img src="img/logo-ips.png" alt="Instituto de Previsión Social" class="logo-ips">
					<h3 class="titulo-pagina">Pago Electrónico IPS</h3>

					<div class="form">
						<form class="contenedor-formulario">
							<!-- RUT DEUDOR-->
							<div class="row">
								<div class="col-xs-12 requiredBlock">
									<label for="rutDeudor">RUN Deudor *</label>
									<input type="text" class="form-control val-rut" id="rutDeudor" placeholder="Ingrese su RUN" maxlength="10">
								</div>
							</div>
							<!-- RUT DEUDOR-->
							<div class="clearfix"></div>
							<!-- FOLIO DEUDOR-->
							<div class="nserie">
								<div class="row">
									<div class="col-xs-12 requiredBlock">
										<label for="folio">Nº Folio Cupón *</label>
										<input type="text" id="folio" class="form-control val-rut" placeholder="Ingrese Folio" maxlength="10">
									</div>
								</div>						
							</div>
							<div class="row row-boton">
								<div class="col-xs-12 col-sm-6 col-sm-offset-3">
									<a href="exito-web.php" id="test" class="btn btn-accion2 btn-lg btn-block" ><strong>Buscar Cupón</strong></a>
								</div>
							</div>
							<input id="intentos" type="hidden"  value='0'>	
						</form>		
					</div>
				</div>
			</section>
			<!-- CONTENEDOR CUPON -->

			<!-- FOOTER -->
			<footer class="canal-oficial">
				<p>Este sitio web es el único canal oficial del Aporte Familiar Permanente</p>

				<div class="row">
					<div class="col-xs-12 col-sm-6 col-sm-offset-3">
						<a href="exito-web.html" target="_blank" class="btn btn-primary btn-block btn-azul-oscuro">IPS en línea</a>
					</div>
				</div>
			</footer>
			<!-- FOOTER -->

		</div>
	</div>
	<!-- SCRIPTS -->
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/jquery.rut.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/accessibility.js"></script>
	<script src="js/base.js"></script>
	
	<script src="js/validations.js"></script>
	<script src="js/svgeezy.min.js"></script>
	<script src="js/bigSlide.min.js"></script>
	<script src="js/manejador-casos.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>
