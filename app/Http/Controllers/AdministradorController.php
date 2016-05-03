<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdministradorController extends Controller
{
    public function index(){
    	return view('administrador.panel');
    }

    public function logOut()
    {
        // destruir la variable de sesion
        //session()->forget('administrador');

        //destruir todas las variables de sesion
        session()->flush();

        return redirect('/');
    }
}
