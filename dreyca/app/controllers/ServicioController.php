<?php 


class ServicioController extends BaseController
{	
	public function Index($servicio){

		$serv = DB::table("servicios")->where('id_titulo','like',"%$servicio%")->get();			
		$serv_rela = DB::table("serv_rela")->where('servicio','like',"%$servicio%")->get();
		$d=0;				
		foreach ($serv as $user){									
			$nombre_serv=$user->nombre_serv;	
			$frase=$user->frase;				
			$frase2=$user->frase2;						
			$descripcion=$user->descripcion;		
			$img_fondo=$user->img_fondo;				
			$img_portada=$user->img_portada;			
			$img_descripcion1=$user->img_descripcion1;
			$img_descripcion2=$user->img_descripcion2;
			$img_descripcion3=$user->img_descripcion3;					
			$color=$user->color;
		}
		$serv_rela1="";			
		$serv_rela2="";
		foreach ($serv_rela as $user){									
			$titulo_serv=$user->titulo;	
			$descripcion_ser=$user->descripcion;
			$d++;
			if ($d>=4) {
				$serv_rela1=$serv_rela1."<tr><td class='col-xs-3 fondo_ele center td_serv'>
						<span class='glyphicon glyphicon-certificate '  style='font-size: 60px;'></span>	
					</td>
					<td class='col-xs-9' style='padding-left:10px; '>
						<h2 class='color_ele '><b>$titulo_serv</b></h2>
						$descripcion_ser
					</td></tr>
					<tr style='height: 20px;'></tr>";			
			}else{
				$serv_rela2=$serv_rela2."<tr><td class='col-xs-3 fondo_ele center td_serv'>
						<span class='glyphicon glyphicon-certificate '  style='font-size: 60px;'></span>	
					</td>
					<td class='col-xs-9' style='padding-left:10px; '>
						<h2 class='color_ele '><b>$titulo_serv</b></h2>
						$descripcion_ser
					</td></tr>
					<tr style='height: 20px;'></tr>";
			}
		}
		return View::make('ServicioVIS',array(			
			'nombre_serv'		=>$nombre_serv,
			'frase'				=>$frase,
			'frase2'			=>$frase2,
			'descripcion'		=>$descripcion,
			'img_fondo'			=>$img_fondo,
			'img_portada'		=>$img_portada,
			'img_descripcion1'	=>$img_descripcion1,
			'img_descripcion2'	=>$img_descripcion2,
			'img_descripcion3'	=>$img_descripcion3,		
			'serv_rela1'		=>$serv_rela1,		
			'serv_rela2'		=>$serv_rela2,		
			'color'				=>$color,		
			));		
	}//GET INDEX
	
}//CONTROLLER
?>
