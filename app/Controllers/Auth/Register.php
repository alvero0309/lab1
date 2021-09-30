<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Entities\User;
use App\Entities\UserInfo;
use Config\Config;
use phpDocumentor\Reflection\Types\Void_;

class Register extends BaseController
{
    protected $configs;
// Define el usuario default
	public function __construct()
	{
		$this->configs = config('Configuration');
	}

    
	public function index()
	{
        return view('Auth/register.php');
    }

    public function store()
	{
		//Reglas	
		$validation = service('validation');
		$validation->setRules([
			'name' => 'required|alpha_space|alpha_space',
			'surname' => 'required|alpha_space|alpha',
			'email' => 'required|valid_email|is_unique[users.email]',
			//'password' => 'required|matches[c-password]'

		]);

		if (!$validation->withRequest($this->request)->run()) {
			//dd($validation->getErrors());
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
		}
	
         
		$user =  new User($this->request->getPost());
		$email = $this->request->getVar('email');
		$user->generateUsarname();
		//Generción de contraseña y ciframiento	
	    $user->generatePass();	
		

		$model = model('UserModel');

		$model->withGroup($this->configs->defaultGroupUsers);

		$userinfo = new UserInfo($this->request->getPost());
		
		$model->addInfoUser($userinfo);

		$model->save($user);
// Envío de correo al Usuario que se registro con éxito
        $mensaje = '<html> 
		<head> 
		   <title>Prueba de correo</title> 
		</head> 
		<body> 
		<h1>Hola Compañer@!</h1> 
		<p> 
		<b>Les damos la bienvenida al sitio de aparatado para el uso del laboratorio del CentroGeo </b>. Nos da mucho gusto de que formen parte de nuestra institución. 
		</p>

		<br>Tu contraseña es:'. $user->pass .' </br>
		
		<p>El correo y la contraseña fueron registrados con éxito, si hubiese algún problema por favor contactarnos a </p><b> lab.posgrado@centrogeo.edu.mx  </b>
		</body>

		</html> ';

		ini_set( 'display_errors', 1 );
		error_reporting( E_ALL );
		$from = "alvero0309@gmail.com";
		$to = $email;
		$subject = "Prueba de notificación";
		$message = $mensaje;
		$headers = "From:" . $from;
		$headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
		mail($to,$subject,$message, $headers);
		echo "The email message was sent.";


		return redirect()->route('login')->with('msg', [
			'type' => 'primary',
			'body' => 'Usuario registrado con éxito !! Para iniciar sesión favor de validar correo que fue enviado'
		]);
	}



}