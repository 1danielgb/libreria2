<?php session_start()	?>
<!DOCTYPE html>
<html>
<head>
	<meta id="token" name="token" value="{{ csrf_token() }}">
	<title></title>
	<link rel="stylesheet" href="/css/materialize.min.css">
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<header>
		<nav class="green darken-4">
		    <div class="nav-wrapper">
		      <a href="/administrador" class="brand-logo">&nbsp; &nbsp; Panel Librería <i class="fa fa-book"></i></a>
		      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars"></i></a>
		      <ul id="nav-mobile" class="right hide-on-med-and-down">
		      	<li>{{ session()->get('administrador')->nombre }}</li>
				<li id="acc"><a href="/logout" id="accc"><i class="fa fa-user"> salir</i></a></li>
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
	<script src="https://cdn.jsdelivr.net/vue/1.0.21/vue.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/vue-resource/0.1.16/vue-resource.min.js"></script>
    <script src="/js/materialize.min.js"></script>
    <script src="/js/app.js"></script>
    @yield('scripts')
</body>
</html>