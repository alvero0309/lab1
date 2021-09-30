<?php

namespace App\Controllers\dashboard;

use App\Controllers\BaseController;
use App\Entities\EntityCalendar;
use Config\Config;
use phpDocumentor\Reflection\Types\Void_;

class calendar extends BaseController
{
    protected $configs;

    public function __construct()
    {
        $this->configs = config('Configuration');
    }

    public function index()
    {
        return view('Components/fullcalendar.php');
    }

    public function store_apart()

    {
        $validation = service('validation');

        $validation->setRules([
            'idanydesk' => 'required|decimal|exact_length[9]',
            'LabPc' => 'required',
            'title' => 'required'
        ]);
        if (!$validation->withRequest($this->request)->run()) {
            //dd($validation->getErrors());
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
        $calendar =  new EntityCalendar($this->request->getPost());
         //Agrega el usuario que esta logeado
         $id_user = session('id_user');

         echo $id_user;

        $model = model('CalendarModel');
        $Calendarinfo = new EntityCalendar($this->request->getPost());
         $model->addUser($id_user);
      
        $model->save($calendar);

        return redirect()->route('calendar')->with('msg', [
			'type' => 'primary',
			'body' => 'Usuario registrado con éxito !! Para iniciar sesión favor de validar correo que fue enviado'
		]);
    }
}
