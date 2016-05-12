<?php  get_header(); ?>

<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><div class="logo"></div></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav roboto uppercase">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Carros <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Testes <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Notícias <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Auto-Serviço <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
          </ul>
        </li>
        <li class="active"><a href="#">Guia de Compras</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tabela Fipe <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
          </ul>
        </li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="../navbar/">Default</a></li>
        <li class="active"><a href="./">Static top <span class="sr-only">(current)</span></a></li>
        <li><a href="../navbar-fixed-top/">Fixed top</a></li> -->
      </ul>
    </div><!--/.nav-collapse -->
</nav>
<nav class="navbar navbar-default navbar-static-top2">
  <div class="container">
    <div id="navbar nav2" class="navbar-collapse collapse">
      	<ul class="nav navbar-nav navbar-nav2 roboto uppercase">
        	<li><a href="#">+ Acessados</a></li>
        	<li><a href="#">Salão do Automóvel</a></li>
        	<li><a href="#">Novo Sandero</a></li>
        	<li><a href="#">Novo Fox</a></li>
        	<li><a href="#">Novo Ka</a></li>
        	<li><a href="#">HB 20</a></li>
        	<li><a href="#">Duster</a></li>
        	<li><a href="#">Golf</a></li>
        	<li><a href="#">Corolla</a></li>
    	</ul>    
  </div>
</nav>


<div class="container">

  <!-- Main component for a primary marketing message or call to action -->
  <div class="jumbotron">
    <h1>Navbar example</h1>
    <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
    <p>To see the difference between static and fixed top navbars, just scroll.</p>
    <p>
      <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
    </p>
  </div>

</div> <!-- /container -->



<?php  get_footer(); ?>