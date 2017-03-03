<!DOCTYPE html>
<html>
<head>
	<title>Dreyca | Contactos</title>
	@include('todo.head')
</head>
<body>
<body>
@include('todo.Menu')
<div class="container-fluid blanco_c" style="padding: 0px;">
<!-- INICIO AsisteClick.com --><div id='ph_nov1478' style='width:0px;height:0px;display:inline-block;'></div><script data-cfasync='false'>var AsisteClick = document.createElement('script');AsisteClick.async = true; AsisteClick.src = '//www.asisteclick2.com/V2/widget.php?lang=es&async=1&floating=DL&base_url=//www.asisteclick2.com&l=nov1478&x=1767&deptid=0&layer=1';var s0 = document.getElementsByTagName('script')[0];s0.parentNode.insertBefore(AsisteClick, s0);</script><!-- FIN AsisteClick.com -->
</body>
<!--////////////////////////////////////////////////////////////////////////-->
<div class="container-fluid negro_c">
	<div class="container"  style="margin-top: 100px;">
		<div class="row">
			
			<div class="col-xs-12 col-md-7 ">
				<img src="<?php echo $img ; ?>" class="img-responsive">				
			</div>
			<div class="col-xs-12 col-md-5" style="font-size:16px;">				
				<h1><b>Informacion de Contactos</b></h1>
				<p >
					<h3 style="color: #FFC107 ;"><b>Telefono</b>:</h3><?php echo $telefono ; ?><br>
					<h3 style="color: #FFC107 ;"><b>Direccion</b>:</h3><?php echo $direccion ; ?><br>					
					<h3 style="color: #FFC107 ;"><b>Horario de Trabajo:</b></h3>
					<?php echo $horario ; ?>
					<h3 style="color: #FFC107 ;"><b>Email</b>:</h3>
					<label class="label label-warning" style="font-size: 20px;"><?php echo $email ; ?></label><br>
					<h3 style="color: #FFC107 ;"><b>Nota</b>:</h3><p style="text-align: justify;"> <?php echo $nota ; ?></p><br>	
				</p>
			</div>			
		</div>		
	</div>
</div>

<div class="container-fluid blanco_c">
	<div class="container">
		<div class="col-xs-12"><br>
		<h1><b>Google Maps</b></h1>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3926.4494850656747!2d-67.33727208467442!3d10.225285092696865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a9e7d299f25fd%3A0xe0a31102dcb535da!2sDREYCA.CA!5e0!3m2!1ses-419!2sve!4v1479415531022" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
		
</div>
	</div>
</div>

@include('todo.pie de pagina')
@include('todo.scrip')
</body>
</html>