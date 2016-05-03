<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Crypt;

class LoginController extends Controller
{
    public function index(Request $request){
    	//dd($request->all());
			//variable de sesion del usuario
            if (Auth::check()){
            	if(Auth::user()->tipo == 1){
            		return redirect('/administrador/panel');
                }
            	return redirect('/');//usuario cliente
            }
           // return "La sesion no se creo";
        //}
        return view('website.acceder');
        //back()->with('error', true);  permite crear variables de tipo flash
    }

    public function store(Request $request){
        
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $usuario =Auth::user();
            if(Auth::user()->tipo == 1){
                //crear variables de sesion
                $request->session()->put('administrador',$usuario);
                return redirect('/administrador');
            }
            return redirect('/');
        }
        return redirect('/acceder');
    }
}