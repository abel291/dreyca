<?php 
function insert_rela_serv($titulo_serv,$serv_rela_titulo,$descripcion_serv){
		DB::table('serv_rela')->insert
								([		   					
			'servicio'		=>$titulo_serv,
			'titulo'		=>$serv_rela_titulo,
			'descripcion'	=>$descripcion_serv	
			]);								
}
function acentos($string){ 
    $string = trim($string); 
    $string = str_replace(
        array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä', ' ',':','’','/','"','\'','<','>','‘','’','?','¿',''),
        array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A', '-','','','-','','','','','','','','',''),
        $string
    ); 
    $string = str_replace(
        array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
        array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
        $string
    ); 
    $string = str_replace(
        array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
        array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
        $string
    ); 
    $string = str_replace(
        array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
        array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
        $string
    ); 
    $string = str_replace(
        array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
        array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
        $string
    ); 
    $string = str_replace(
        array('ñ', 'Ñ', 'ç', 'Ç'),
        array('n', 'N', 'c', 'C',),
        $string
    );
    $titulo_bd=strtolower($string);
   
	return $titulo_bd;
}
function img_subi($img,$tipo,$titulo,$nom_img){
	if (isset($_FILES[$img]['name'])){
		$imagen_temp=$_FILES[$img]['name'];
		$direccion=$_FILES[$img]['tmp_name'];
		
		switch ($tipo) {
			case 'vista':							
				$img_fondo="imagenes/temp/".acentos(date('Y-m-d-s')."-".$imagen_temp);
				move_uploaded_file($direccion,$img_fondo);	
			break;
			case 'guardar':
				$tipo=$_FILES[$img]['type'];
				$tipo=str_replace("image/", "", $tipo);							
				$img_fondo="imagenes/servicios/$titulo-$nom_img.$tipo";
				move_uploaded_file($direccion,$img_fondo);
				$img_fondo="$titulo-$nom_img.$tipo";
			break;
						
			default:			
			break;
		}		
		
	}else
	{	
		$img_fondo="";								
	}
		return $img_fondo;	
}
class InsertController extends BaseController
{
	public function getIndex()
	{
		return View::make('InsertVIS');
	}
	public function postVista()
	{	
		$mask = "imagenes/temp/*";
		array_map( "unlink", glob( $mask ) );
		$serv_titulo1=$_POST['serv-rela-titulo1-form'];
		$serv_titulo2=$_POST['serv-rela-titulo2-form'];
		$serv_titulo3=$_POST['serv-rela-titulo3-form'];
		$serv_titulo4=$_POST['serv-rela-titulo4-form'];
		$serv_titulo5=$_POST['serv-rela-titulo5-form'];
		$serv_titulo6=$_POST['serv-rela-titulo6-form'];
		$serv1=$_POST['serv-rela-desc1-form'];
		$serv2=$_POST['serv-rela-desc2-form'];
		$serv3=$_POST['serv-rela-desc3-form'];
		$serv4=$_POST['serv-rela-desc4-form'];
		$serv5=$_POST['serv-rela-desc5-form'];
		$serv6=$_POST['serv-rela-desc6-form'];
		
		$serv_rela1="
			<tr><td class='col-xs-3 fondo_ele center td_serv'>
					<span class='glyphicon glyphicon-certificate' style='font-size: 60px;'></span>	
				</td>
				<td class='col-xs-9' style='padding-left:10px; '>
					<h2 class='color_ele serv_rela'>$serv_titulo1</h2>
					$serv1
				</td>
			</tr>
			<tr style='height: 20px;'></tr>

			<tr><td class='col-xs-3 fondo_ele center td_serv'>
					<span class='glyphicon glyphicon-certificate' style='font-size: 60px;'></span>	
				</td>
				<td class='col-xs-9' style='padding-left:10px; '>
					<h2 class='color_ele serv_rela'>$serv_titulo2</h2>
					$serv2
				</td>
			</tr>
			<tr style='height: 20px;'></tr>

			<tr><td class='col-xs-3 fondo_ele center td_serv'>
					<span class='glyphicon glyphicon-certificate' style='font-size: 60px;'></span>	
				</td>
				<td class='col-xs-9' style='padding-left:10px; '>
					<h2 class='color_ele serv_rela'>$serv_titulo3</h2>
					$serv3
				</td>
			</tr>
			<tr style='height: 20px;'></tr>"		
		;

		$serv_rela2="
				<tr><td class='col-xs-3 fondo_ele center td_serv'>
						<span class='glyphicon glyphicon-certificate' style='font-size: 60px;'></span>	
					</td>
					<td class='col-xs-9' style='padding-left:10px; '>
						<h2 class='color_ele serv_rela'>$serv_titulo4</h2>
						$serv4
					</td>
				</tr>
				<tr style='height: 20px;'></tr>

				<tr><td class='col-xs-3 fondo_ele center td_serv'>
						<span class='glyphicon glyphicon-certificate' style='font-size: 60px;'></span>	
					</td>
					<td class='col-xs-9' style='padding-left:10px; '>
						<h2 class='color_ele serv_rela'>$serv_titulo5</h2>
						$serv5
					</td>
				</tr>
				<tr style='height: 20px;'></tr>

				<tr><td class='col-xs-3 fondo_ele center td_serv'>
						<span class='glyphicon glyphicon-certificate' style='font-size: 60px;'></span>	
					</td>
					<td class='col-xs-9' style='padding-left:10px; '>
						<h2 class='color_ele serv_rela'>$serv_titulo6</h2>
						$serv6
					</td>
				</tr>
				<tr style='height: 20px;'></tr>"
		;
		$img_fondo=$_POST['img-fondo-form'];	
		$img_descripcion=$_POST['img-descripcion-form'];	
		$img_portada=$_POST['img-portada-form'];
		$titulo=$_POST['titulo-form'];
		$frase=$_POST['frase-form'];
		$frase2=$_POST['frase2-form'];
		$descripcion=$_POST['descripcion-form'];
		$descripcion=str_replace("\n","<br>",$descripcion);						
		$color=$_POST['color-form'];
		$item="
		<div class='container-fluid vista_fondo' style=' padding:0px;  background:url(".$img_fondo.") no-repeat center center fixed;-webkit-background-size: cover;-moz-background-size: cover; -o-background-size: cover;background-size: cover;'>		
			<div class='hidden-xs' style='position: relative;'>
				<div class='titulos_prin center' style=' text-shadow: 1px 1px 1px #212121;'>
				<h1 style='font-size: 70px; font-weight: bold; text-transform: uppercase; '>$titulo</h1>
				<div style='font-size: 30px;'>$frase</div>
				</div>
				<center><img  src='".$img_portada."' class='img-responsive' style='width: 100%;' ></center>	<!--//////////////////////////////////////////-->
			</div>		
			<!--////////////////////////////////////////////////////////////////////////-->
			<div class='container-fluid  negro_c' >	
				<div class='container ' style='padding: 100px 20px;'>
					<div class='row '>			
						<div class='col-xs-12 col-md-6  ' style='line-height: 30px; '>				
							<h1 class='color_ele titulo-dd' style='text-transform: uppercase;' ><b>$titulo</b></h1>
							<h3>$frase2</h3>
							<p class='text-justify' style='font-size: 17px;padding-right :20px;'>
								$descripcion	
							</p>	
						</div>	
						<div class='col-xs-12 col-md-6 center'>
							<img src='".$img_descripcion."' class='img-responsive' style='display:inline-block;' > <!--//////////////////////////////////////////-->				
						</div>			
					</div>		
				</div>	
			</div>
			<div class='container-fluid fondo_ele blanco center'>	
				<h2><b>Servicios</b> Relacionados</h2>
			</div>

			<div class='container-fluid negro_c blanco ' style=' background:url(/imagenes/div_fondo.png);'>	
				<div class='container ' style='padding: 100px 20px;'>
					<div class='row'>
					<div class='col-xs-12 col-md-6'>
						<table>
							$serv_rela1
						</table>
						<br>
					</div>
					<div class='col-xs-12 col-md-6'>			
						<table>
							$serv_rela2
						</table>
					</div>				
					</div><!--row-->			
				</div><!--container-->		
			</div><!--container-fluid-->	
		</div>	
		";			
			

		echo $item;	

		

		/*return View::make('ServicioVIS',array(			
			'nombre_serv'=>$_POST['titulo-form'],
			'frase'=>$_POST['frase-form'],
			'frase2'=>$_POST['frase2-form'],
			'descripcion'=>$_POST['descripcion-form'],
			'img_fondo'=>$_POST['img-fondo-form'],
			'img_portada'=>$_POST['img-portada-form'],
			'img_descripcion'=>$_POST['img-descripcion-form'],		
			'serv_rela1'=>$serv_rela1,		
			'serv_rela2'=>$serv_rela2,		
			'color'=>$_POST['color-form'],		
			));		*/
	}//vista

	public function postGuardar()
	{	
		$titulo=htmlentities($_POST['titulo-form']);
		$id_titulo=acentos($_POST['titulo-form']);		
		$frase=htmlentities($_POST['frase-form']);
		$frase2=htmlentities($_POST['frase2-form']);
		$descripcion=htmlentities($_POST['descripcion-form']);

		$color=$_POST['color-form'];

		//$img_fondo=img_subi("img-fondo-form","guardar",$id_titulo,"img-fondo");	
		//$img_descripcion=img_subi("img-descripcion-form","guardar",$id_titulo,"img-descripcion");	
		//$img_portada=img_subi("img-portada-form","guardar",$id_titulo,"img-portada");
		$img_fondo=$_POST['img-fondo-form'];	
		$img_descripcion=$_POST['img-descripcion-form'];	
		$img_portada=$_POST['img-portada-form'];

		DB::table('servicios')->insert
		([		   					
			'id_titulo'			=>$id_titulo,
			'nombre_serv'			=>$titulo,
			'frase'				=>$frase,
			'frase2'			=>$frase2,
			'descripcion'		=>$descripcion,
			'img_fondo'			=>$img_fondo,
			'img_portada'		=>$img_portada,
			'img_descripcion'	=>$img_descripcion,
			'color'				=>$color,	
		]);		

		insert_rela_serv($id_titulo,htmlentities($_POST['serv-rela-titulo1-form']),htmlentities($_POST['serv-rela-desc1-form']));
		insert_rela_serv($id_titulo,htmlentities($_POST['serv-rela-titulo2-form']),htmlentities($_POST['serv-rela-desc2-form']));
		insert_rela_serv($id_titulo,htmlentities($_POST['serv-rela-titulo3-form']),htmlentities($_POST['serv-rela-desc3-form']));
		insert_rela_serv($id_titulo,htmlentities($_POST['serv-rela-titulo4-form']),htmlentities($_POST['serv-rela-desc4-form']));
		insert_rela_serv($id_titulo,htmlentities($_POST['serv-rela-titulo5-form']),htmlentities($_POST['serv-rela-desc5-form']));
		insert_rela_serv($id_titulo,htmlentities($_POST['serv-rela-titulo6-form']),htmlentities($_POST['serv-rela-desc6-form']));

		
		echo "listo";
		}
}
?>