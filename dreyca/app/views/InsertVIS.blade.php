<!DOCTYPE html>
<html>
<head>
@include('todo.head')
	<title>Agregar nuevo servicio</title>
</head>
<body style="background: url('http://4.bp.blogspot.com/-IeBunDvbMuo/WDsdl3XfytI/AAAAAAAAALc/P0CrT5AhuO45OzGu3wZB--_KpPdk8uVOACK4B/s1600/bb.jpg');">
	<div class="container-fluid"><br><br><br>
		<div class="container">
			<div class="row well_p" style="padding: 10px;">
				<div class="col-xs-12  " >
					<h2 class="page-header"> <b>Agregar Servicio</b></h2>				
					<form  class="form-horizontal " action="/insert/vista" enctype="multipart/form-data" id="formuploadajax" method="post" target="_blank" >					
						<div class="form-group">
							<label for="formGroup" class="col-xs-12 col-sm-2  col-lg-2  control-label">Nombre del servicio </label>
							<div class="col-xs-12  col-sm-8   ">
								<input class="form-control" type="text" name="titulo-form" placeholder="Ploteo, impresion...." >
							</div>
						</div>

						<div class="form-group">
							<label for="formGroup" class="col-xs-12 col-sm-2 col-lg-2  control-label">Frase</label>
							<div class="col-xs-12 col-sm-5 col-md-4 col-lg-3" >
								<input class="form-control" type="text" name="frase-form" placeholder="frase que va despues del titulo" >
							</div>
						</div>

						<div class="form-group">
							<label for="formGroup" class="col-xs-12 col-sm-2 col-lg-2  control-label">Descripcion del servicio</label>
							<div class="col-xs-12 col-sm-10">
								<textarea class="form-control" placeholder="Pequeña descripcion del servicio" name="descripcion-form" ></textarea>
							</div>
						</div>

						<div class="form-group">
							<label for="formGroup" class="col-xs-12 col-sm-2 col-lg-2  control-label">Frase2</label>
							<div class="col-xs-12 col-sm-5 col-md-4 col-lg-3" >
								<input class="form-control" type="text" name="frase2-form" placeholder="frase que va despues del titulo" >
							</div>
						</div>	
						
						<div class="form-group">
							<label for="formGroup" class="col-xs-12 col-sm-2 col-lg-2  control-label">Img-fondo</label>
							<div class="col-xs-10">					
								<input class="form-control img-fondo-form" type="text" name="img-fondo-form" value="" >			
							</div>							

						</div>

						<div class="form-group">
							<label for="formGroup" class="col-xs-12 col-sm-2 col-lg-2  control-label">Img-Portada</label>
							<div class="col-xs-10">					
								<input class="form-control  img-portada-form " type="text" name="img-portada-form" value="" >			
							</div>							
						</div>

						<div class="form-group">
							<label for="formGroup" class="col-xs-12 col-sm-2 col-lg-2  control-label">Img-descripcion</label>
							<div class="col-xs-10">					
								<input class="form-control img-descripcion-form" type="text" name="img-descripcion-form" value="" >
							</div>							

						</div>

						<div class="form-group">
							<label for="formGroup" class="col-xs-12 col-sm-2 col-lg-2  control-label">Servicios Relacioandos 1</label>
							<div class="col-xs-6 col-sm-3">					
								<input class="form-control" type="text" name="serv-rela-titulo1-form" ">			
							</div>
							<div class="col-xs-12 col-sm-7">
								<textarea  class="form-control" placeholder="Pequeña descripcion de los servicios" name="serv-rela-desc1-form" ></textarea>
							</div>
						</div>

						<div class="form-group">
							<label for="formGroup" class="col-xs-12 col-sm-2 col-lg-2  control-label">Servicios Relacioandos 2</label>
							<div class="col-xs-6 col-sm-3">					
								<input class="form-control" type="text" name="serv-rela-titulo2-form" ">			
							</div>
							<div class="col-xs-12 col-sm-7">
								<textarea class="form-control descripcion-form" placeholder="Pequeña descripcion de los servicios" name="serv-rela-desc2-form" ></textarea>
							</div>
						</div>

						<div class="form-group">
							<label for="formGroup" class="col-xs-12 col-sm-2 col-lg-2  control-label">Servicios Relacioandos 3</label>
							<div class="col-xs-6 col-sm-3">					
								<input class="form-control serv-rela-form" type="text" name="serv-rela-titulo3-form" ">			
							</div>
							<div class="col-xs-12 col-sm-7">
								<textarea class="form-control descripcion-form" placeholder="Pequeña descripcion de los servicios" name="serv-rela-desc3-form" ></textarea>
							</div>
						</div>

						<div class="form-group">
							<label for="formGroup" class="col-xs-12 col-sm-2 col-lg-2  control-label">Servicios Relacioandos 4</label>
							<div class="col-xs-6 col-sm-3">					
								<input class="form-control serv-rela-form" type="text" name="serv-rela-titulo4-form" ">			
							</div>
							<div class="col-xs-12 col-sm-7">
								<textarea class="form-control descripcion-form" placeholder="Pequeña descripcion de los servicios" name="serv-rela-desc4-form" ></textarea>
							</div>
						</div>

						<div class="form-group">
							<label for="formGroup" class="col-xs-12 col-sm-2 col-lg-2  control-label">Servicios Relacioandos 5</label>
							<div class="col-xs-6 col-sm-3">					
								<input class="form-control serv-rela-form" type="text" name="serv-rela-titulo5-form" ">			
							</div>
							<div class="col-xs-12 col-sm-7">
								<textarea class="form-control descripcion-form" placeholder="Pequeña descripcion de los servicios" name="serv-rela-desc5-form" ></textarea>
							</div>
						</div>

						<div class="form-group">
							<label for="formGroup" class="col-xs-12 col-sm-2 col-lg-2  control-label">Servicios Relacioandos 6</label>
							<div class="col-xs-6 col-sm-3">					
								<input class="form-control serv-rela-form" type="text" name="serv-rela-titulo6-form" ">			
							</div>
							<div class="col-xs-12 col-sm-7">
								<textarea class="form-control descripcion-form" placeholder="Pequeña descripcion de los servicios" name="serv-rela-desc6-form" ></textarea>
							</div>
						</div>

						<div class="form-group">
							<label for="formGroup" class="col-xs-12 col-sm-2 col-lg-2  control-label">Color</label>
							<div class="col-xs-6 col-sm-1">					
								<label>
							    	<input type="radio" name="color-form" value="00BCD4" checked="" >
							    	<div class="serv_tabla" style="background:#00BCD4; display: inline-block; "></div>						    
							  	</label>	
							</div>

							<div class="col-xs-6 col-sm-1">					
								<label>
							    	<input type="radio" name="color-form" value="E91E63" >
							    	<div class="serv_tabla" style="background:#E91E63; display: inline-block; "></div>						    
							  	</label>	
							</div>

							<div class="col-xs-6 col-sm-1">					
								<label>
							    	<input type="radio" name="color-form" value="FFC107" >
							    	<div class="serv_tabla" style="background:#FFC107; display: inline-block; "></div>						    
							  	</label>	
							</div>

							<div class="col-xs-6 col-sm-1">					
								<label>
							    	<input type="radio" name="color-form" value="9C27B0" >
							    	<div class="serv_tabla" style="background:#9C27B0; display: inline-block; "></div>						    
							  	</label>	
							</div>

							<div class="col-xs-6 col-sm-1">					
								<label>
							    	<input type="radio" name="color-form" value="2196F3" >
							    	<div class="serv_tabla" style="background:#2196F3; display: inline-block; "></div>						    
							  	</label>	
							</div>

							<div class="col-xs-6 col-sm-1">					
								<label>
							    	<input type="radio" name="color-form" value="009688" >
							    	<div class="serv_tabla" style="background:#009688; display: inline-block; "></div>						    
							  	</label>	
							</div>

							<div class="col-xs-6 col-sm-1">					
								<label>
							    	<input type="radio" name="color-form" value="FF5722" >
							    	<div class="serv_tabla" style="background:#FF5722; display: inline-block; "></div>						    
							  	</label>	
							</div>

							<div class="col-xs-6 col-sm-1">					
								<label>
							    	<input type="radio" name="color-form" value="4CAF50" >
							    	<div class="serv_tabla" style="  background:#4CAF50; display: inline-block; "></div>						    
							  	</label>	
							</div>
							<div class="col-xs-6 col-sm-1">					
								<label>
							    	<input type="radio" name="color-form" value="F44336" >
							    	<div class="serv_tabla" style="  background:#F44336; display: inline-block; "></div>						    
							  	</label>	
							</div>						
						</div>
						<div class="form-group">
							<div class="col-xs-12 col-sm-10 col-sm-offset-2 botones ">
								<button type="submit" tarjet="_blank" id="VISTA-PREVIA" class="btn btn-default" ><span class="icon-paint-format"></span> Vista Previa</button>							
								<button type="Reset" class="btn btn-default"><span class="icon-pencil2"></span> Vaciar </button>

								<button type="button" class="btn" id="GUARDAR" style=" background:#424242; color: white;"><span class="icon-pencil2"></span> Guardar </button>

								<div class="ESTATUS_VISTA label label-danger"><span class="glyphicon glyphicon-italic" ></span>No deje campos vacios</div> 
								
							</div>
						</div>

						<div class="form-group barra_load_vista">
							<label for="formGroup" class="col-xs-12 col-sm-2 col-lg-2  control-label">Cargando..</label>
							<div class="col-xs-12 col-sm-10 ">
								<div class="progress">
							  	<div class="progress-bar progress-bar-danger" role="progressbar"  aria-valuemin="0" aria-valuemax="100" style="width:0%;">0%</div>	
								</div>
								<div class="tamañoo">0%,0,0</div>	
							</div>
						</div>

						<div class="form-group">
							<div class="col-xs-12 col-sm-10 col-sm-offset-2 ">
								 
								
							</div>
						</div>	
					
					</form>	
				</div>
			</div>
		</div><br><br><br>	
	</div>

	<div class="vista">
		

	</div>

		


@include('todo.scrip')
<script type="text/javascript">
	
jQuery(document).ready(function($) {
	$('.ESTATUS_VISTA,.barra_load_vista,.loadd_guardar').hide();
	$(document).on('click', '#VISTA-PREVIA', function(e1) {			
		e1.preventDefault();		
		var ititulo=$(".titulo-form").val();
		var color_vista='#'+$("input[type='radio']:checked").val();
		$('#formuploadajax').attr('action', '/insert/vista');
		$('.barra_load_vista,.vista').fadeIn();				
		$('.progress').html('<div class="progress-bar progress-bar-danger active" role="progressbar"  aria-valuemin="0" aria-valuemax="100" style="width: 0%;">0%</div>')
			var bar = $('.progress-bar');
			var tamañoo = $('.tamañoo');
			tamañoo.text('Esperando Respuesta');
			$('#formuploadajax').ajaxSubmit({					               
	            beforeSubmit: function() {	                	
	                var percentVal = '0%';
				    bar.width(percentVal);					
	            },
	            uploadProgress: function(event, position, total, percentComplete) {
				    var percentVal = percentComplete + '%';
				    bar.width(percentVal).html(percentVal);				               
					console.log(percentVal, position/1000, total/1000);						
					tamañoo.html('<span class="label label-default">'+Math.round(position/1000)+' kbs </span> de <span class="label label-success">'+Math.round(total/1000)+' kbs</span>');
				},
				success: function(data) {				 	
				 	$('.barra_load_vista').hide();			 	
				    var percentVal = '100%';
				    bar.width(percentVal)				      
				    $(".vista").html(data);				    					
					$("html, body").animate({ scrollTop:$('.vista_fondo').offset().top }, 1000);
					$('.fondo_ele').css('background', color_vista);
					$('.color_ele').css('color', color_vista);					
				},
				error:function() {				   	
					$(".titulo-vista").html('Error al subir las imagenes');		
				}	               
	        }) //ajax           
					
	});//#pasar

	$(document).on('click', '#GUARDAR', function(e2) {			
		e2.preventDefault();
		$('.barra_load_vista').show();				
		var t1= $('.img-fondo-form').val();
		var t2= $('.img-portada-form').val();
		var t3= $('.img-descripcion-form').val();

		if (t1=="" || t2=="" || t3=="") {
			$(".ESTATUS_VISTA").fadeIn('slow/400/fast');
			setTimeout(function(){
			$(".ESTATUS_VISTA").fadeOut('slow/400/fast');	
			}, 1000);		
		}else{
			$('#formuploadajax').attr('action', '/insert/guardar');
			$('.vista').hide();
			$('.progress').html('<div class="progress-bar progress-bar-danger active" role="progressbar"  aria-valuemin="0" aria-valuemax="100" style="width: 0%;">0%</div>')
			var bar = $('.progress-bar');
			var tamañoo = $('.tamañoo');
			tamañoo.text('Esperando Respuesta');
			$('#formuploadajax').ajaxSubmit({					               
	            beforeSubmit: function() {	                	
	                var percentVal = '0%';
				    bar.width(percentVal);					
	            },
	            uploadProgress: function(event, position, total, percentComplete) {
				    var percentVal = percentComplete + '%';
				    bar.width(percentVal).html(percentVal);				               
					console.log(percentVal, position/1000, total/1000);						
					tamañoo.html('<span class="label label-default">'+Math.round(position/1000)+' kbs </span> de <span class="label label-success">'+Math.round(total/1000)+' kbs</span>');
				},
				success: function(data) {				 	
				 	$('.barra_load_vista').hide();				      
				    $('#GUARDAR').text(data);			    					
					$('.botones').html('<b>Listo ya esta Guardado</b><br><a href="/tablero" >Ir al panel de adminitarcion</a>');
					
					
				},
				error:function() {				   	
					$(".titulo-vista").html('Error al subir las imagenes');		
				}	               
	        }) //ajax  */         	
		}//if  */

		

					
		
					
	});//#pasar














	});//#jquery
</script>
</body>
</html>