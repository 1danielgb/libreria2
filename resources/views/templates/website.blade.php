<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="/css/materialize.min.css">
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<header>
		<?php $route = Route::current()->uri(); ?>
		<nav class="green darken-4">
		    <div class="nav-wrapper">
		      <a href="/" class="brand-logo">&nbsp; &nbsp; Librería <i class="fa fa-book"></i></a>
		      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars"></i></a>
		      <ul id="nav-mobile" class="right hide-on-med-and-down">
		      	<li class=@if($route == 'tienda') {{ 'active-item' }} @endif><a href="/tienda"><i class="fa fa-list-alt"></i> Tienda</a></li>
		      	<li class=@if($route == 'carrito') {{ 'active-item' }} @endif><a href="/carrito">Carrito <i class="fa fa-shopping-cart"></i></a></li>
				<li class=@if($route == 'acerca') {{ 'active-item' }} @endif><a href="/acerca"><i class="fa fa-info-circle"> Acerca de</i></a></li>
				<li class=@if($route == 'contacto') {{ 'active-item' }} @endif><a href="/contacto"><i class="fa fa-phone"></i> Contactanos</a></li>
				<li class=@if($route == 'acceder') {{ 'active-item' }} @endif><a href="/acceder"><i class="fa fa-user"> Acceder</i></a></li>
		      </ul>
		     <ul class="side-nav" id="mobile-demo">
		        <li><a href=""><i class="fa fa-user"></i> Acceder</a></li>
				<li><a href=""><i class="fa fa-info-circle"> Acerca de</i></a></li>
				<li><a href=""><i class="fa fa-phone"></i> Contactanos</a></li>
				<li><a href=""><i class="fa fa-shopping-cart"> Carrito</i></a></li>
				<li><a href=""><i class="fa fa-list-alt"></i> Tienda</a></li>
		      </ul>
			</div>
		</nav>
	</header>

	@yield('content')

	<footer class="page-footer green darken-2">
		<div class="container">
            <div class="row">
              	<div class="col l6 s12">
                	<h5 class="white-text">
                		Librería <i class="fa fa-book"></i>
                	</h5>
                	<p class="grey-text text-lighten-4">LEER ES UNA EXPERIENCIA DE VIDA.</p>
              	</div>
	            <div class="col l4 offset-l2 s12">
	                <h5 class="white-text">ENLACES</h5>
	                <ul>
	                	<li><a class="grey-text text-lighten-3" href="/acceder"> Acceder</a></li>
	                  	<li><a class="grey-text text-lighten-3" href="/acerca"> Acerca de</a></li>
	                  	<li><a class="grey-text text-lighten-3" href="/contacto"> Contactanos</a></li>
	                  	<li><a class="grey-text text-lighten-3" href="/tienda"> Tienda</a></li>
	                </ul>
	            </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
             	© 2016 - César Ricardo Pérez Rodríguez
            	<a class="grey-text text-lighten-4 right btn-social" href="#!"> <i class="fa fa-twitter-square fa-2x"></i></a>
            	<a class="grey-text text-lighten-4 right btn-social" href="#!"><i class="fa fa-facebook-square fa-2x"></i> </a>
         	</div>
        </div>
    </footer>

	<script src="/js/jquery-2.2.1.min.js"></script>
    <script src="/js/materialize.min.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>