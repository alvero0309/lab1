<?php namespace App\Libraries;

class Components{
    public function getHeader(){

        $serice = \Config\Services::request();
       
        return view('Components/header');
    }

    public function getHeaderuser(){

        return view('Components/menUser');
    }

    public function getFooter(){

        $serice = \Config\Services::request();
    
       
        return view('Components/footer');
    }
}