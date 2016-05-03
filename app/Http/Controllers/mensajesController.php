<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mensaje;

class mensajesController extends Controller
{
    public function store(Request $request){
    	/*$mensaje = \DB::table('mensaje')->insert([
    			'nombre' => $request->nombre,
    			'email' => $request->email,
    			'mensaje' => $request->mensaje,
    			'created_at' => date('Y-m-d H:i:s'),
    			'update_at' => date('Y-m-d H:i:s')
    		]);*/

    	/*$mensaje=new Mensaje;
    	$mensaje->nombre = $request->nombre;
    	$mensaje->email = $request->email;
    	$mensaje->mensaje = $request->mensaje;
    	$mensaje->save();*/

    	$mensaje = Mensaje::create($request->all());

    	echo'<script language="javascript">alert("Su mensaje a sido enviado");</script>';
    	return view('webside.contacto');
    }
}