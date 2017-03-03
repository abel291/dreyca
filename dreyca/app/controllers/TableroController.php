<?php 
class TableroController extends BaseController
{	
	public function __construct(){
		$this->beforeFilter('auth');
	}
	public function getIndex(){
		$serv = DB::table("servicios")->get();
		$item="";
		foreach ($serv as $user){
			$id_titulo=$user->id_titulo;									
			$nombre_serv=$user->nombre_serv;	
			$frase=$user->frase;								
			$color=$user->color;
			$item=$item."
				<tr valign='bottom'>
					<td>
                       <h3><a href='/$id_titulo' target='_blank' style='text-decoration: none;color: #212121;'>$nombre_serv</a></h3>                       	
                    </td>
                    <td valign='middle'>
                       	<div class='serv_tabla' style='background: #$color;'  > </div>
                    </td> 
                    <td valign='middle'>
                        <button  class='btn btn-succes modifi_servi ' id='$id_titulo' data-toggle='modal' data-target='#modal'><b>Ver</b></button>                        
                       	<button  type='button' id='$id_titulo' class='btn btn-danger borrar blanco' data-toggle='modal' data-target='#modal'><span class='glyphicon glyphicon-trash'></span></button>
                    </td>
				</tr>";
		}
		$cont = DB::table("contacto")->get();
		$contactos="";
		foreach ($cont as $user){									
			$telefono=$user->telefono;	
			$direccion=$user->direccion;								
			$horario=$user->horario;								
			$email=$user->email;
			$nota=$user->nota;
			$facebook=$user->facebook;
			$twitter=$user->twitter;
			$instagram=$user->instagram;								
			

			$contactos=$contactos."
				<b>Telefono</b>:<br>
					$telefono<br>
				<b style='margin-top: 10px; display: inline-block;'>Direccion:</b><br>$direccion<br>
				<b style='margin-top: 10px; display: inline-block;'>Horario de Trabajo:</b><br>$horario<br>
				<b style='margin-top: 10px; display: inline-block;'>Email:</b><br>$email<br>				
				<b style='margin-top: 10px; display: inline-block;'>Redes:</b><br>
				<a href='$facebook'>Facebook</a><br>
				<a href='$instagram'>Instagram</a><br>
				<a href='$twitter'>Twitter</a><br>
				<b style='margin-top: 10px; display: inline-block;text-align: justify;'>Nota</b><br>$nota<br>
				<b>Imagen</b>:<br>
				<center><img src='$user->img' class='img-thumbnail' ></center> 
				";
		}

		return View::make('TableronVIS',array(			
			'item'=>$item,		
			'contactos'=>$contactos,		
		));		
	}//GET INDEX
	public function getContacto(){

		$contactos = DB::table('contacto')->get();
		foreach ($contactos as $user ) {
			$horario=str_replace("<br>","\n",$user->horario);
			$direccion=str_replace("<br>","\n",$user->direccion);	
			$nota=str_replace("<br>","\n",$user->nota);	
			$datos="<form id='formuploadajax'>					            
					<div class='form-group'>
				    	<label >Telefono</label>
				    	<input name='telefono' type='text' class='form-control' value='$user->telefono'>
				  	</div>
				  	<div class='form-group'>
				    	<label >Horario</label>
				    	<textarea class='form-control' style='min-height: 80px;' name='horario'>$horario</textarea>
				  	</div>
				  	<div class='form-group'>
				    	<label >Direccion</label>
				    	<textarea class='form-control' style='min-height: 80px;' name='direccion'>$direccion</textarea>
				  	</div>
				  	<div class='form-group'>
				    	<label >img</label>
				    	<input name='img' type='text' class='form-control' value='$user->img'>
				  	</div>
				  	
				  	<div class='form-group'>
				    	<label >Email</label>
				    	<input name='email' type='text' class='form-control' value='$user->email'>
				  	</div>

				  	<div class='form-group'>
				    	<label >Nota</label>
				    	<textarea class='form-control' style='min-height: 80px;' name='nota'>$nota</textarea>
				  	</div>

				  	<div class='form-group'>
				    	<label >Facebook</label>
				    	<input name='facebook' type='text' class='form-control' value='$user->facebook'>
				  	</div>
				  	<div class='form-group'>
				    	<label >Twitter</label>
				    	<input name='twitter' type='text' class='form-control' value='$user->twitter'>
				  	</div>
				  	<div class='form-group'>
				    	<label >Instagram</label>
				    	<input name='instagram' type='text' class='form-control' value='$user->instagram'>
				  	</div>
				</form>";
		}
		echo json_encode($datos);
	}//GET CONTACTOS	
	public function postGuardaconta(){
		
		$telefono=$_POST['telefono'];
		$horario=htmlentities($_POST['horario']);
		$direccion=htmlentities($_POST['direccion']);
		$nota=htmlentities($_POST['nota']);

		$horario=str_replace("\n","<br>",$horario);
		$direccion=str_replace("\n","<br>",$direccion);		
		$nota=str_replace("\n","<br>",$nota);

		$email=$_POST['email'];
		$facebook=$_POST['facebook'];
		$twitter=$_POST['twitter'];
		$instagram=$_POST['instagram'];
		$img=$_POST['img'];
		
		DB::table('contacto')
		->where('id_contactos',"1")
		->update
			([	
				'telefono'=>$telefono,
				'horario'=>$horario,										
				'direccion'=>$direccion,
				'email'=>$email,
				'img'=>$img,
				'nota'=>$nota,
				'facebook'=>$facebook,
				'twitter'=>$twitter,
				'instagram'=>$instagram
			]);
			echo json_encode("
				<b>Telefono</b>:<br>
					$telefono<br>
				<b style='margin-top: 10px; display: inline-block;'>Direccion:</b><br>
					$direccion<br>
				<b style='margin-top: 10px; display: inline-block;'>Horario de Trabajo:</b><br>
					$horario<br>
				<b style='margin-top: 10px; display: inline-block;'>Email:</b><br>
					$email<br>				
				<b style='margin-top: 10px; display: inline-block;'>Redes:</b><br>
				<a href='$facebook'>Facebook</a><br>
				<a href='$instagram'>Instagram</a><br>
				<a href='$twitter'>Twitter</a><br>
				<b style='margin-top: 10px; display: inline-block;text-align:justify;'>Nota:</b><br>
					$nota<br>
				<b>Imagen</b>:<br>
				<img src='$img' class='img-thumbnail'>
				");
	}//post Guardaconta*/
	public function getFormularioservicio(){

		$id=$_GET['id'];
		$item="";
		$c=0;
		$serv_relacionado = DB::table('serv_rela')->where("servicio","like","$id")->get();
			foreach ($serv_relacionado as $user ) {
				$c=$c+1;
				$item=$item.
				"<div class='form-group'>
					<label for='formGroup' class='col-xs-12 col-sm-2 col-lg-2  control-label'>Servicios Relacioandos $c </label>
					<div class='col-xs-6 col-sm-3'>					
						<input class='form-control' type='text' name='serv-rela-titulo$c-form' value='$user->titulo'>			
					</div>
					<div class='col-xs-12 col-sm-7'>
						<textarea class='form-control' name='serv-rela-desc$c-form'>$user->descripcion</textarea>
					</div>
				</div>
				";
			}

		$servicios = DB::table('servicios')->where("id_titulo","like","$id")->get();
			foreach ($servicios as $user ) {
				$c=$c++;
				$descripcion=str_replace("<br>","\n",$user->descripcion);		
				$formulario="<form  class='form-horizontal' id='formuploadajax'>				
							<div class='form-group'>
								<label for='formGroup' class='col-xs-12 col-sm-2  col-lg-2  control-label'>Nombre del servicio </label>
								<div class='col-xs-12  col-sm-8   '>
									<input class='form-control' type='text' name='titulo-form' value='$user->nombre_serv'>
								</div>
							</div>

							<div class='form-group'>
								<label for='formGroup' class='col-xs-12 col-sm-2 col-lg-2  control-label'>Frase</label>
								<div class='col-xs-12 col-sm-8' >
									<input class='form-control' type='text' name='frase-form' value='$user->frase'>
								</div>
							</div>

							<div class='form-group'>
								<label for='formGroup' class='col-xs-12 col-sm-2 col-lg-2  control-label'>Descripcion del servicio</label>
								<div class='col-xs-12 col-sm-10'>
									<textarea class='form-control' name='descripcion-form'>$descripcion</textarea>
								</div>
							</div>

							<div class='form-group'>
								<label for='formGroup' class='col-xs-12 col-sm-2 col-lg-2  control-label'>Frase2</label>
								<div class='col-xs-12 col-sm-10' >
									<input class='form-control' type='text' name='frase2-form' value='$user->frase2'>
								</div>
							</div>	

							<div class='form-group'>
								<label for='formGroup' class='col-xs-12 col-sm-2 col-lg-2  control-label'>Img-portada</label>
								<div class='col-xs-12 col-sm-10' >
									<input class='form-control' type='text' name='img-portada-form' value='$user->img_portada'>
								</div>
							</div>	
							

							<div class='form-group'>
								<label for='formGroup' class='col-xs-12 col-sm-2 col-lg-2  control-label'>img-fondo</label>
								<div class='col-xs-12 col-sm-10' >
									<input class='form-control' type='text' name='img-fondo-form' value='$user->img_fondo'>
								</div>
							</div>

							<div class='form-group'>
								<label for='formGroup' class='col-xs-12 col-sm-2 col-lg-2  control-label'>Img-descripcion1</label>
								<div class='col-xs-10 col-sm-8' >
									<input class='form-control' type='text' name='img-descripcion1-form' value='$user->img_descripcion1'>	
								</div>								
							</div>	

							<div class='form-group'>
								<label for='formGroup' class='col-xs-12 col-sm-2 col-lg-2  control-label'>Img-descripcion2</label>
								<div class='col-xs-10 col-sm-8' >
									<input class='form-control' type='text' name='img-descripcion2-form' value='$user->img_descripcion2'>	
								</div>								
							</div>	

							<div class='form-group'>
								<label for='formGroup' class='col-xs-12 col-sm-2 col-lg-2  control-label'>Img-descripcion3</label>
								<div class='col-xs-10 col-sm-8' >
									<input class='form-control' type='text' name='img-descripcion3-form' value='$user->img_descripcion3'>	
								</div>								
							</div>						

							$item

							<div class='form-group radio'>
								<label for='formGroup' class='col-xs-12 col-sm-2 col-lg-2  control-label'>Color actual</label>
								<div class='col-xs-4 col-sm-1'>					
									<label>
										<input type='radio' name='color-form' value='$user->color' checked >							    	
								    	<div class='serv_tabla' style='background:#$user->color; display: inline-block; '></div>						    
								  	</label>	
								</div>
							</div>

							<div class='form-group radio'>
								<label for='formGroup' class='col-xs-12 col-sm-2 col-lg-2  control-label'>Color a Cambiar</label>
								<div class='col-xs-4 col-sm-1'>					
									<label>
								    	<input type='radio' name='color-form' value='00BCD4' >
								    	<div class='serv_tabla' style='background:#00BCD4; display: inline-block; '></div>						    
								  	</label>	
								</div>

								<div class='col-xs-4 col-sm-1'>					
									<label>
								    	<input type='radio' name='color-form' value='E91E63' >
								    	<div class='serv_tabla' style='background:#E91E63; display: inline-block; '></div>						    
								  	</label>	
								</div>

								<div class='col-xs-4 col-sm-1'>					
									<label>
								    	<input type='radio' name='color-form' value='FFC107' >
								    	<div class='serv_tabla' style='background:#FFC107; display: inline-block; '></div>						    
								  	</label>	
								</div>

								<div class='col-xs-4 col-sm-1'>					
									<label>
								    	<input type='radio' name='color-form' value='9C27B0' >
								    	<div class='serv_tabla' style='background:#9C27B0; display: inline-block; '></div>						    
								  	</label>	
								</div>

								<div class='col-xs-4 col-sm-1'>					
									<label>
								    	<input type='radio' name='color-form' value='2196F3' >
								    	<div class='serv_tabla' style='background:#2196F3; display: inline-block; '></div>						    
								  	</label>	
								</div>

								<div class='col-xs-4 col-sm-1'>					
									<label>
								    	<input type='radio' name='color-form' value='009688' >
								    	<div class='serv_tabla' style='background:#009688; display: inline-block; '></div>						    
								  	</label>	
								</div>

								<div class='col-xs-4 col-sm-1'>					
									<label>
								    	<input type='radio' name='color-form' value='FF5722' >
								    	<div class='serv_tabla' style='background:#FF5722; display: inline-block; '></div>						    
								  	</label>	
								</div>

								<div class='col-xs-4 col-sm-1'>					
									<label>
								    	<input type='radio' name='color-form' value='4CAF50' >
								    	<div class='serv_tabla' style='  background:#4CAF50; display: inline-block; '></div>						    
								  	</label>	
								</div>
								<div class='col-xs-4 col-sm-1'>					
									<label>
								    	<input type='radio' name='color-form' value='F44336' >
								    	<div class='serv_tabla' style='  background:#F44336; display: inline-block; '></div>						    
								  	</label>	
								</div>						
							</div>
					</form>";
				}

			echo json_encode(array(	'id' => $id,
									'formulario' => $formulario ));
	}//post Formularioservicio*/
	public function postGuardarserv($id_titulo){

		$titulo=htmlentities($_POST['titulo-form']);
		
		$frase=htmlentities($_POST['frase-form']);
		$frase2=htmlentities($_POST['frase2-form']);
		$img_portada=$_POST['img-portada-form'];
		$img_descripcion1=$_POST['img-descripcion1-form'];
		$img_descripcion2=$_POST['img-descripcion2-form'];
		$img_descripcion3=$_POST['img-descripcion3-form'];
		$img_fondo=$_POST['img-fondo-form'];
		$descripcion=htmlentities($_POST['descripcion-form']);	
		$descripcion=str_replace("\n","<br>",$descripcion);		
		$color=$_POST['color-form'];
		
		DB::table('servicios')->where("id_titulo","like","$id_titulo")->update	
		([		   					
			
			'nombre_serv'		=>$titulo,
			'frase'				=>$frase,
			'frase2'			=>$frase2,
			'img_portada'		=>$img_portada,
			'img_descripcion1'	=>$img_descripcion1,
			'img_descripcion2'	=>$img_descripcion2,
			'img_descripcion3'	=>$img_descripcion3,
			'img_fondo'			=>$img_fondo,
			'descripcion'		=>$descripcion,			
			'color'				=>$color,	
		]);	
		
		DB::table('serv_rela')->where('servicio','like',$id_titulo)->delete();
		for ($i=1; $i <=6 ; $i++) { 
			DB::table('serv_rela')->insert
			([		   					
			'servicio'		=>$id_titulo,
			'titulo'		=>htmlentities($_POST['serv-rela-titulo'.$i.'-form']),
			'descripcion'	=>htmlentities($_POST['serv-rela-desc'.$i.'-form'])	
			]);
		}
									

		echo json_encode("Listo");
	}
	public function getBorrarservicio(){
		$id_titulo=$_GET['id'];
		$id_titulo=str_replace("confirm-","",$id_titulo);	
		DB::table('serv_rela')->where('servicio','like',$id_titulo)->delete();
		DB::table('servicios')->where('id_titulo','like',$id_titulo)->delete();

		echo json_encode("#$id_titulo");
	}
	public function getPrincipal(){
		$item="
		<form  class='form-horizontal' id='formuploadajax'>				
							<div class='form-group'>
								<label for='formGroup' class='col-xs-12 col-sm-2  col-lg-2  control-label'>Nombre del servicio </label>
								<div class='col-xs-12  col-sm-8   '>
									<input class='form-control' type='text' name='titulo-form' value='nombre_serv'>
								</div>
							</div>

							<div class='form-group'>
								<label for='formGroup' class='col-xs-12 col-sm-2 col-lg-2  control-label'>Frase</label>
								<div class='col-xs-12 col-sm-8' >
									<input class='form-control' type='text' name='frase-form' value='frase'>
								</div>
							</div>";

		echo json_encode($item);
}	
	

	
}//CONTROLLER borrarservicio
?>