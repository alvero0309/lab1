<?php

namespace App\Controllers\dashboard;

use App\Controllers\BaseController;
use App\Entities\User;
use App\Entities\UserInfo;
use Config\Config;

class apart extends BaseController
{
	protected $configs;

	public function __construct()
	{
		$this->configs = config('Configuration');
	}

	public function index()
	{
		return view('apartado.php');
	}

		
	
}
