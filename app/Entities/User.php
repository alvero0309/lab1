<?php namespace App\Entities;

use CodeIgniter\Entity\Entity;

class User extends Entity

{

    protected $dates = ['created_at', 'update_at'];
//Al obtener el password con el formularo este hash se calcula.
    protected function setPassword($password){
     $this->attributes['password'] = password_hash($password,PASSWORD_DEFAULT);
    }
//Genera el nombre de usuario a partir del nombre validar documentación
    public function generateUsarname(){
        $this->attributes['username'] = explode(' ',$this->name)[0].explode(' ',$this->surname)[0].rand(1,5);
        
    }

    public function generatePass(){
        $this->attributes['pass'] = explode(' ',$this->name)[0].explode(' ',$this->surname)[0].rand(1,10);
        $password_g = $this->attributes['pass'];
        $this->attributes['password'] = password_hash($password_g,PASSWORD_DEFAULT);
    }

}
