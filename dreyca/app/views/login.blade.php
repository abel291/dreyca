<!DOCTYPE html>
<html lang="es">
	<head>
		@include('todo.head')
		<title>Dreyca | Login</title>
	</head>	
<body style="position: absolute;display: flex;align-items: center; width: 100%; height: 100%; ">


<div class="container" >
	<div class="row " >	
		<div class=" col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 ">
			<center><a href="/" class="titulo_fuera">Dreyca C.A</a></center>			
			<form class="form login-div" action="/login/verificar" method="POST">
				<div style="background: #00BCD4;width: 34%;height: 5px;display: block; float: right;" ></div>
				<div style="background: #E91E63;width: 33%;height: 5px;display: block; float: right;" ></div>
				<div style="background: #FFC107;width: 33%;height: 5px;display: block; float: right;" ></div>
				<BR> 		
				<p class="titulo" ><b>Inicio de Sesion</b></p>
			  	<div class="input-group">
		    		<span class="input-group-addon" style="border-radius: 0px;" ><span class="glyphicon glyphicon-user"></span></span>
		    		<input type="text" name="usuario" class="form-control" required style="border-radius: 0px; padding: 20px;">
		  		</div>
		  		<br>
			  	<div class="input-group">
		    		<span class="input-group-addon" style="border-radius: 0px;" ><span class="glyphicon glyphicon-lock"></span></span>
		    		<input type="password" name="clave" class="form-control" required style="border-radius: 0px; padding: 20px;">
		  		</div>		  							
						
				<!--<div class="checkbox">
				    <label>
				    	<input class="recordame" type="checkbox" name="recordar"> Recordar 
				    </label>
				</div>	-->
				<BR>  					  			    	
			    <button style="border-radius: 1px;" type="submit" class="btn">Entrar</button>		  	
			</form>

		</div>
		<div class=" col-xs-12 col-sm-4 col-sm-offset-4   ">
		<br>		
		<center><h4 class="Copy"> © Copyright 2010 - 2017 </h4></center>
		</div>
	</div>
</div>

<style type="text/css">
 body{
 	background: #212121;
 }
	a:hover{
		text-decoration: none;
		color: white;
	}
	.titulo{
		font-size: 16px;	
	}
	.titulo_fuera{
		font-family: 'Roboto', sans-serif;
		font-size: 38px;
		margin-left: 12px;
		color: white;
		text-decoration: none;
		font-weight: bold;
	}	
	.Copy{
		font-size: 14px;
		color: white;
		margin-bottom: 10px;
	}

	.login-div{	
		color: black;
		border-radius: 5px;
		background-color: white;	
		padding: 20px 30px;	
		box-shadow: 3px 3px 3px #212121;
}
</style>
</body>
</html>