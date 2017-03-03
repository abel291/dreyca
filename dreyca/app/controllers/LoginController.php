<?php 

class LoginController extends BaseController
{	
	public function getIndex()
	{	
		
		return View::make('login');	
	}
	public function postVerificar()
	{	

		/*date_default_timezone_set('America/Caracas');
		DB::table('login')->insert
		([		   					
			'username'			=>"dreyca",
			'password'			=>Hash::make('123456789'),
			'remember_token'	=>date("Y-m-d h:i:s")
		]);		
		
		echo "listo";*/
		$usuario=$_POST['usuario'];
		$clave=$_POST['clave'];
		
		$userdata = array( 
			'username' => $usuario,
			'password'=> $clave
		);  
		//si los datos son correctos y existe un usuario con los mismos se inicia sesión
		//y redirigimos a la home
		if(Auth::attempt($userdata))
		{ 
			return Redirect::to('/tablero'); 
		}else{
			//en caso contrario mostramos un error
			return Redirect::to('/login'); 
		}
	}
}
?>