<?php 
class ContactosController extends BaseController
{	
	public function Index(){
		$cont = DB::table("contacto")->get();
		$item="";
		foreach ($cont as $user){									
			$telefono=$user->telefono;	
			$direccion=$user->direccion;								
			$horario=$user->horario;								
			$email=$user->email;								
			$img=$user->img;
			$nota=$user->nota;		
		}
		return View::make('ContactoVis',array(			
			'telefono'=>$telefono,		
			'direccion'=>$direccion,		
			'horario'=>$horario,		
			'email'=>$email,		
			'img'=>$img,
			'nota'=>$nota,		
		));		
	}//GET INDEX
	
}//CONTROLLER ?>