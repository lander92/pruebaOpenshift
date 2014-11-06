<!DOCTYPE html>
<html>
<head>
	<title>Osteopatia</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/bootstrap/3.2.0/css/bootstrap.min.css"/>

    <!-- Include FontAwesome CSS if you want to use feedback icons provided by FontAwesome -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/fontawesome/4.1.0/css/font-awesome.min.css" />

    <!-- BootstrapValidator CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css"/>

    <!-- jQuery and Bootstrap JS -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- BootstrapValidator JS -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js"></script>
	<link href="../css/main.css" rel="stylesheet" media="screen">
</head>
<body id="inicio">
	<?php 
		session_start();
		echo $_SESSION['dni'];
	?>
	<section class="container">
		<div class="content row">
        	<?php include "../componentes/headerPacientes.php"; ?>
			<section class="main col col-lg-8">
          		<?php include "../componentes/mainPacientes.php"; ?>
			</section><!-- main -->
			<section class="sidebar col col-lg-4">
          		<?php include "../componentes/noticias.php"; ?>
			</section><!-- sidebar -->
		</div><!-- content -->
		<div class="content row" id="footer">
      		<?php include "../componentes/footer.php"; ?>
   		</div>
    </section><!-- container -->
    
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../js/miapp.js"></script>
</body>
</html>