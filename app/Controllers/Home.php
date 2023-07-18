<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function prueba()
    {
        echo 'verificando datos';
    }

    public function api()
    {
        $usuario= array (
            "IDCEDULA" => "0750973224",
            "Nombres" => "Bryan Zavala",
            "Ciudad" => "Pasaje",
            "Direcion" => "Perimetral Sur",
            "Telefono" => "0959613388",
        );

      //  echo json_encode($usuario) ,

      return $this -> response->setJSON($usuario);

    }

}
