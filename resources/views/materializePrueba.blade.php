<!DOCTYPE html>
<html>
<head>
	<title>Librería</title>
	<link rel="stylesheet" href="/css/materialize.min.css">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
</head>
<body>

<!-- -------------------------------- Encabezado ------------------------------------ -->
	<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Librería</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="">Registrar</a></li>
        <li><a href="">Acceder</a></li>
        <li><a href="">Buscar</a></li>
      </ul>
    </div>
  </nav>

  <br/>

<!-- ------------------------------------ Lista ------------------------------------- -->
  <ul id="dropdown2" class="dropdown-content">
    <li><a href="#!">one<span class="badge">1</span></a></li>
    <li><a href="#!">two<span class="new badge">1</span></a></li>
    <li><a href="#!">three</a></li>
  </ul>
  <a class="btn dropdown-button" href="#!" data-activates="dropdown2">Lista<i class="mdi-navigation-arrow-drop-down right"></i></a>
   

	<div class="row">
    	<div class="col s12">
    	  <ul class="tabs">
    	    <li class="tab col s3"><a href="#test1">opcion 1</a></li>
    	    <li class="tab col s3"><a class="active" href="#test2">opcion 2</a></li>
    	    <li class="tab col s3 disabled"><a href="#test3">opcion deshabilitada</a></li>
    	    <li class="tab col s3"><a href="#test4">opcion 4</a></li>
    	  </ul>
    	</div>
    	<div id="test1" class="col s12">opcion 1</div>
    	<div id="test2" class="col s12">opcion 2</div>
    	<div id="test3" class="col s12">opcion 3</div>
 	</div>


<ul class="collection with-header">
        <li class="collection-header"><h4>First Names</h4></li>
        <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
      </ul>

  <br/>
<!-- ------------------------------------ botones ------------------------------------- -->

	<button class="waves-effect waves-red btn">clic</button>
	
	<a class="btn tooltipped" data-position="xbottom" data-delay="50" data-tooltip="letrero abajo">otro boton</a>
	
	<div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;">
		<a class="btn-floating btn-large red">
			<i class="large material-icons">mode_edit</i>
		</a>
		<ul>
			<li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
			<li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
			<li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
			<li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
		</ul>
	</div>
        
	<a class="waves-effect waves-red btn-large" href="#">Wave</a>

	<a href="#!" class="waves-effect waves-circle waves-red btn-floating  secondary-content">
		<i class="material-icons">add</i>
	</a>


  <br/>
<!-- ------------------------------------ tablas ------------------------------------- -->

      <table class="bordered">
        <thead>
          <tr>
              <th data-field="id">Nombre</th>
              <th data-field="name">Version</th>
              <th data-field="price">Precio</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
        </tbody>
      </table>
            


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
	<script src="/js/jquery-2.1.1.min.js"></script>
    <script src="/js/materialize.min.js"></script>
</body>
</html>