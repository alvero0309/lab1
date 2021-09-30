<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Entities\User;
use App\Entities\UserInfo;
use Config\Config;

class login extends BaseController
{
	protected $configs;

	public function __construct()
	{
		$this->configs = config('Configuration');
	}

	public function index()
	{
        if (!session()->is_logged) {
            return view('Auth/login.php');
        } else {
			return redirect()->route('calendar');
		}
       

	}

	public function sigin()
	{
		//dd($this->request->getPost());
		if (!$this->validate([
			'email' => 'required|valid_email',
			'password' => 'required'

		])) {
			return redirect()->back()
				->with('errors', $this->validator->getErrors())
				->withInput();
		}

		$email = trim($this->request->getVar('email'));
		$password = trim($this->request->getVar('password'));

		$model = model('UserModel');
		//Si encuentra el usuario
		if ($user = $model->getUserBy('email', $email)) {
			//Se verfica el password con hash
			if (!password_verify($password, $user->password)) {
				return redirect()->back()
					->with('msg', [
						'type' => 'danger',
						'body' => 'Contraseña invalida'
					]);
			} else {
               session()->set(['msg',
				   'id_user' => $user->id,
				   'username' => $user->username,
				   'is_logged' => true
			   ]);
//Se puede retornar  Formularios o Calendario
				return redirect()->route('calendar')->with('msg',[
					'type' => 'success',
					'body' => 'Bienvenido '. $user->username
				]);
			}

		} 
		else {
			return redirect()->back()
				->with('msg', [
					'type' => 'danger',
					'body' => 'Este usuario no se encuentra registrado en el sistema'
				]);
		}



		
	}

	public function logout(){
		session()->destroy();
		return redirect()->route('login');
	}
}
