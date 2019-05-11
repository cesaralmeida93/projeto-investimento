<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


        public function homepage()
        {
            $variavel = "Homepage do sistema de gestão para grupos de investimento";

            return view('welcome', [
                'title' => $variavel
            ]);
        }

        public function cadastrar()
        {
            echo "tela de cadastro";
        }

        /*
        *method to user login VIEW
        *===========================================================================
        */ 
        public function fazerLogin()
        {
            echo "tela de login";
        }
}
