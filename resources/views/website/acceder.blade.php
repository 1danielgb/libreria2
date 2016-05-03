@extends('templates.website')
@section('content')
<section class="container">
	<div class="row">
		<div class="col s12">
			<div class="card-panel" id="section3">
				@if(Session::has('error'))
					<p class="error">Usuario no encontrado</p>
				@endif
				<form class="col s12" action="/login" method="POST">
					{{ csrf_field() }}
					<div class="input-field row">
						<div class="col s12">
							<input type="email" class="validate" name="email">
          					<label>email</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="password" class="validate" name="password">
							<label>Password</label>
						</div>
					</div>
					<div class="row">
						<div class="col s12">
							<input type="submit" class="waves-effect waves-light btn" value="Acceder">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

@stop