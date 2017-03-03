<!DOCTYPE html>
<html lang="es">
<head>	
	<title>Dreyca Crea Diseña Innova</title>
	@include('todo.head')
</head>
<body>
	<div class="div-cargando" style="position: absolute;display: table; width: 100%;top: 0px; bottom: 0px; height: 100%;background: #fff; z-index: 999999;">	
		<div class="center" style="width: 100%;height: 100%; display: table-cell;	vertical-align: middle; ">
			<img  src="imagenes/cargando.gif"><br><label>Cargando Datos</label>
		</div>
	</div>

@include('todo.Menu')
<div class="container-fluid" style="padding: 0px;">
	<div class="hidden-xs" style="position: relative;">
	<div class="titulos_prin center" style="text-shadow: 1px 1px 1px #212121;">
	<h1 style="font-size: 70px; font-weight: bold; text-transform: uppercase; "><?php echo $nombre_serv; ?></h1>
	<div style="font-size: 30px;"><?php echo $frase; ?></div>
	</div>
	<center><br><img style="width: 100%;"  src="<?php echo $img_portada;?>" class="img-responsive"></center>	
</div>
</div>
<style type="text/css">	
.fondo_ele{
	background:#<?php echo $color; ?> ;
}
.color_ele{
	color: #<?php echo $color; ?>;
}
body { 
  background: url('<?php echo $img_fondo;?>') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
<!--////////////////////////////////////////////////////////////////////////-->
<div class="container-fluid  negro_c" >	
	<div class="container " style="padding: 100px 20px;">
		<div class="row ">			
			<div class="col-xs-12 col-md-6  " style="  line-height: 28px;padding-right: 20px; ">				
				<h1 class="color_ele" style="text-transform: uppercase;" ><b><?php echo $nombre_serv;?></b></h1>
				<h3><b><?php echo $frase2; ?></b></h3>
				<p style=" text-align: justify;	font-size: 16px; text-transform: ;">
					<?php echo $descripcion; ?>			
				</p>	
			</div>	
			<div class="col-xs-12 col-md-6 center  ">
			<label class="text-uppercase color_ele " ><b>EJEMPLOS DE LOS SERVICIOS DE <?php echo $nombre_serv; ?></b> </label>
				<div id="carousel_servicios" class="carousel slide" data-ride="carousel">

				 	<div class="carousel-inner" role="listbox">
				    	<div class="item active">
				      		<img  src="<?php echo $img_descripcion1;?>">				      
				    	</div>
					    <div class="item">
					      	<img  src="<?php echo $img_descripcion2;?>">				      
					    </div>
					    <div class="item">
					      	<img  src="<?php echo $img_descripcion3;?>">				      
					    </div>				  
				  </div>
				  <!-- Controls	-->
					<a class="left carousel-control" href="#carousel_servicios" role="button" data-slide="prev">
				    	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    	<span class="sr-only">Previous</span>
				  	</a>
				  	<a class="right carousel-control" href="#carousel_servicios" role="button" data-slide="next">
				    	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    	<span class="sr-only">Next</span>
				 	 </a>
				</div>									
			</div>			
		</div>		
	</div>				
</div>
<div class="container-fluid fondo_ele blanco center">	
	<h2><b>Servicios</b> Relacionados</h2>
</div>

<div class="container-fluid negro_c blanco text-justify" style=" background:url('http://3.bp.blogspot.com/-nNDe-nOsbrs/WDsdnpILWAI/AAAAAAAAALs/kpUcq8_RXO4dh7PLWS_0udwZbAS6rrNfACK4B/s400/div_fondo.png');">	
	<div class="container " style="padding: 100px 20px;">
		<div class="row">
		<div class="col-xs-12 col-md-6">
			<table>
				<?php echo $serv_rela1; ?>
			</table>
			
		</div>
		<div class="col-xs-12 col-md-6">			
			<table>
				<?php echo $serv_rela2; ?>
			</table>
		</div>				
		</div><!--row-->			
	</div><!--container-->		
</div><!--container-fluid-->	
<!--////////////////////////////////////////////////////////////////////////-->
<div class="container-fluid   fondo_ele ">
	<div class="container">	
		<div class="row">
			<div class="col-xs-12 col-md-8 blanco">
				<h1><b>NO S&Eacute; CUAL ELEGIR!</b></h1>
				<p style="font-size: 18px;">No tienes idea de cual nesecitas? Contactanos, nosotros podemos ayudarte.</p>			
			</div>
			<div class="col-xs-12  col-md-4 center"><br>
				<a href="/contacto" class="btn btn-default" style="font-size: 18px; padding: 10px 20PX; border-radius:4px;"><b>CONTACTANOS</b></a>		
			</div>
		</div>
	</div>
</div>
<!--////////////////////////////////////////////////////////////////////////-->
@include('todo.pie de pagina')
@include('todo.scrip')
<script type="text/javascript">    
   jQuery(document).ready(function($) {
   		$('.container-fluid,.container,.navbar').hide();
   		 
        $(window).load(function () {
        	$('.div-cargando').fadeOut();
           $('.container-fluid,.container,.navbar').show();
           

        });
});//#jquery

</script> 
</body>
</html>