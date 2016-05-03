<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ambientesController extends Controller
{
    public function index(){
    	return "ambientesControler";
    }

    public function show(Request $request){
    	return $request->all();
    	//return $request->nombre;
    }

    public function store(Request $request){
    	$usuario = \DB::table('usuario')->insert([
    			'nombre' => $request->nombre,
    			'nick' => $request->nick,
    			'email' => $request->email,
    			'password' => $request->password,
    			'telefono' => $request->telefono
    		]);
    	return $request->all();
    }
}
