
@extends('templates.administrador')
@section('content')

<section class="container">

<div class="row">
	<div id="navegacion" class="col s12">
		<a href="/administrador">Menú principal </a>
		<span> | </span>
		<a href="/administrador/libros"> Libros </a>
		<span> | </span>
		<a class="active" href="#!"> Registrar libro </a>
	</div>
	<div class="row">
		<div class="col s12">
			<h5><b>Registrar libro</b></h5>
			<label> @{{titulo}}</label>
		</div>
		
		
	</div>
</div>


</section>
	<section class="container">
		
		<div class="row">

			<div class="col s12 l6 offset-l3">
				<div class="card-panel form-libro">

					<h5></h5>
					<form class="col s12" action="/administrador/libros" method="POST" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="row">
							<div class="input-field col s12">
								<input type="text" class="validate" name="titulo" v-model ="titulo"value="{{ old('titulo') }}" />
          						<label for="titulo">Nombre</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input type="text" class="validate" name="edicion" value="{{ old('edicion') }}" />
          						<label for=",edicion">Edicion</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input type="text" class="validate" name="paginas" value="{{ old('paginas') }}" />
          						<label for="paginas">Paginas</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input type="text" class="validate" name="presio" value="{{ old('presio') }}" />
          						<label for="presio">Presio</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input type="text" class="validate" name="isbn" value="{{ old('isbn') }}" />
          						<label for="isbn">Isbn</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input type="text" class="validate" name="descuento" value="{{ old('descuento') }}" />
          						<label for="descuento">Descuento</label>
							</div>
						</div>

						<div class="row">
							<div class="input-field col s12">
							    <select>
							      <option value="" disabled selected>Choose your option</option>
							      <option value="1">Option 1</option>
							      <option value="2">Option 2</option>
							      <option value="3">Option 3</option>
							    </select>
							    <label>Selecciona Autor</label>
							</div>
						</div>
						
						<div class="row">
							<div class="file-field input-field">
						      <div class="btn">
						        <span>Imagen</span>
						        <input type="file" name="image">
						      </div>
						      <div class="file-path-wrapper">
						        <input class="file-path validate" type="text" name="imagen">
						      </div>
						    </div>
						</div>

						<div class="row">
							<div class="input-field col s12">
								<input type="hidden" class="validate" name="idi_editorial" value="1" />
          						<input type="hidden" class="validate" name="idi_dioma" value="1" />
							</div>
						</div>
						<div class="row">
							<div class="col s12">
								<button type="submit" class=" col s6 waves-effect waves-light btn right cyan darken-3">Registrar</button>
								<a href="/panel" class="col s6 btn waves-effect waves-light">Atras</a>
								
							</div>
						</div>
					</form>
				</div>
			</div>
			
			<div class="col s12 m6 l3">	
				<div class="card-panel form-aut">
					<center><h6>Nuevo Autor</h6></center>
					
					<form class="col s12" action="/administrador/libros/autor" method="POST" @submit.prevent="signUp">
						{{ csrf_field() }}
						<div class="row">
							<div class="input-field col s12">
								<input type="text" class="validate" name="nombre" v-model ="newautor.nombre"value="{{ old('nombre') }}" />
          						<label for="nombre">Autor</label>
							</div>
						</div>
						<div class="col s12" v-show="newautor.nombre">
								<button type="submit" class=" col s12 waves-effect waves-light btn right cyan darken-3" >Registrar</button>
						</div>
					</form>
					
				</div>
			</div>

			<div class="col s12 m6 l3">	
				<div class="card-panel form-edi">
					<center><h6>Nueva Editorial</h6></center>
					
					<form class="col s12" action="/administrador/libros" method="POST" @submit.prevent="editorialsg">
						{{ csrf_field() }}
						<div class="row">
							<div class="input-field col s12">
								<input type="text" class="validate" name="nombre" v-model ="newedito.nombre"value="{{ old('nombre') }}" />
          						<label for="nombre">Nombre</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input type="text" class="validate" name="telefono" v-model ="newedito.telefono"value="{{ old('telefono') }}" />
          						<label for="telefono">Telefono</label>
							</div>
						</div>
						<div class="col s12" v-show="newedito.nombre">
								<button type="submit" class=" col s12 waves-effect waves-light btn right cyan darken-3">Registrar</button>
						</div>
					</form>
					
				</div>
			</div>		
		</div>
	</section>

@stop

@section('scripts')
	<script>
		/*$(document.ready(function(){

		}));*/
		/*$(function(){
			alert("vamos a registrar");
		});*/
		//vue
		Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');
		
		new Vue({
			el: "body", //elemento sobre el que vamos a trabajar
			data:{
				//titulo:"",
				newautor: {
					nombre:'',
				},
				newedito:{
					nombre:"",
					telefono:"",
				}
				
			},
			ready: function(){
				//this.signUp();
			},
			methods: {
				signUp: function(e){
					e.preventDefault();
					var nombre = this.newautor;
					//this.autor.push(autor);
					
					//this.$resource(/administrador/libros/autor:autor);
					//alert(resource);
					//alert(this.autor + ', Te estamos agregado....');
					//this.submitted=true;
					this.$http.post('/administrador/libros/autor',nombre);
					//this.$http.get('/administrador/libros/autor', function(autor){
					//	this.$set('autor',autor);
					//});
					this.newautor = {nombre: ''};
					Materialize.toast('Autor agregado', 3000, 'rounded');
				},
				editorialsg: function(e){
					//alert(this.editorial + ', Estamos agregado....');
					var nombre = this.newedito;
					this.$http.post('/administrador/libros/editorial',nombre);
					this.newedito = {nombre: '',telefono:''};
					Materialize.toast('Editorial agregada', 3000, 'rounded');
				},
			},
		});

	</script>
 
@stop