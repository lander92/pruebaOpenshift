<!DOCTYPE html>
<html>
<head>
	<title>Osteopatia</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../assets/css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="../css/main.css" rel="stylesheet" media="screen">
</head>
<body id="inicio">
	<section class="container">
		<div class="content row">
        	<?php include "../componentes/headerMedico.php"; ?>
			<section class="main col col-lg-8">
          		<?php include "../componentes/mainMedico.php"; ?>
			</section><!-- main -->
			<section class="sidebar col col-lg-4">
          		<?php include "../componentes/noticiasMedico.php"; ?>
			</section><!-- sidebar -->
		</div><!-- content -->
		<div class="content row" id="footer">
      		<?php include "../componentes/footer.php"; ?>
   		</div>
    </section><!-- container -->
    
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>