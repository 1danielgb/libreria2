@extends('templates.website')
@section('content')
	<section id="slider-contacto" class="container">
		<div class="slider green darken-2">
			<ul class="slides">
	      	<li><img src="/imagenes/Contacto.jpg"></li>
		      <li><img src="/imagenes/contacto2.jpg"></li>
		      <li><img src="/imagenes/contacto3.jpg"></li>	
		    </ul>
	  	</div> 
	</section>

	<div class="row registro">
		<p><center><h3>Contactanos &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </h3></center></p>
	  <form method="post" action="/mensajes" class="col s12">
	    <div class="row registro">
	      <div class="input-field col s6">
	        <input type="text" class="validate" name="nombre">
	        <label>Nombre</label>
	      </div>
	    </div>
	    <div class="row registro">
	      <div class="input-field col s6">
	        <input type="email" class="validate" name="email">
	        <label>email</label>
	      </div>
	    </div>
	    <div class="row registro">
	      <p> &nbsp; &nbsp;Dudas y/o sugerencias: </p>
	      <div class="col s6">
	        <TEXTAREA rows="5" cols="30" name="mensaje"></TEXTAREA>
	      </div>
	    </div>
		<div class="row registro">
			<input type="submit" class="waves-effect waves-light btn" value="Enviar">
	    </div>
	  </form>
	</div>

	<div class="cuerpocont">
		<p>
			<i class="fa fa-twitter-square fa-2x"></i> @Líbreria<br/>
			<i class="fa fa-facebook-square fa-2x"></i> Líbreria<br/>
			<i class="fa fa-phone-square fa-2x"></i> (312) 312-1234<br/>
			<i class="fa fa-mobile fa-2x"></i> 044-312-312-1234<br/>
			<i class="fa fa-envelope fa-2x"></i> Líbreria@libreria.com.mx<br/>
		</p>
	</div>

@stop