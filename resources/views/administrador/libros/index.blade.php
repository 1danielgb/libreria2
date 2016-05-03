@extends('templates.administrador')
@section('content')

<section class="container">
<div class="row">
	<div id="navegacion" class="col s12">
		<a href="/administrador">Menú principal </a>
		<span> | </span>
		<a class="active" href="#!"> Libros </a>
	</div>
	<div class="row">
		<h5><b>Menú principal</b></h5>
		<div class="col s12 m6 l6">
		<a href="/administrador/libros/create" class="item">
			<div class="card-panel grey lighten-4">
				<div class="row">
					<div class="col s2">
						<h3 class="color-item"><b><i class="fa fa-book"></i></b></h3>
					</div>
					<div class="col s10">
						<h5>
							<strong class="color-item">Registrar libro</strong>
						</h5>
						<h6 class="color-subitem">Módulo para dar de alta un libro</h6>
					</div>
				</div>
			</div>
		</a>
	</div>
	<div class="col s12 m6 l6">
		<a href="/administrador/libros/show" class="item">
			<div class="card-panel grey lighten-4">
				<div class="row">
					<div class="col s2">
						<h3><b><i class="fa fa-pencil-square-o" aria-hidden="true"></i></b></h3>
					</div>
					<div class="col s10">
						<h5>
							<strong>Consulta y edita libro</strong>
						</h5>
						<h6>Módulo para la modificación de informacion de un libro</h6>
					</div>
				</div>
			</div>
		</a>
	</div>
</div>
</section>

@stop