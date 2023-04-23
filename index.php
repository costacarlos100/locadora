<!DOCTYPE html>
<html>
  <head>
    <title>Locadora</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/materialize.css" />
	<link rel="stylesheet" href="css/styles.css" />
	<!--<link href="css/docs.css" rel="stylesheet">-->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
  </head>
  <body>
    <header class="cabecalho">
	  <h1 class="logo">
		<a href="index.php" title="Locadora"><img src="img/logo.png" /></a>  
	  </h1>
	  
	  <?php if(isset($_POST['buscarFilmess']))
				$search = $_POST['buscarFilmess'];
		?>
	  <form method="POST" action="paginas/produtos.php">
	    <input type="text" placeholder="Faça uma busca" name="buscarFilmess">
		
		<input type="submit" value="Buscar">
		
	  </form>
    </header>
	
	<nav class="menu">
	  <ul>
	    <li><img src="img/icons/home.png"/> <a href="index.php">Home</a> </li>
	    <li><img src="img/icons/video.png"/> <a href="paginas/produtos.php">Filmes</a> </li>
		<li><img src="img/icons/cadastro2.png"/> <a href="paginas/clientes.php">Cadastre-se</a> </li>
	    <li> <a href="paginas/carrinho.php">Carrinho</a> </li>
		<?php
			$passei = 1;
			include_once("php/logando.php");
			include_once("php/buscadorDeFilmes.php");
			$BuscandoFilmes = new BuscandoFilmes;
			$BuscandoFilmes -> painel($passei);
		echo "</ul>";
			$BuscandoFilmes = new BuscandoFilmes;
			$BuscandoFilmes -> userLogado($passei);
	     
		 
	  ?>
	</nav> 
	
	
	<main class="principal">
			
 <div class="slide">

<section class="col-md-6  col-md-offset-2" id="sliderhome">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

 <div class="carousel-inner">
			<div class="item active"><a href="paginas/produtos.php"><img src="img/banner1.png" alt="Slide1"/></a></div>
			<div class="item"><a href="paginas/produtos.php"><img src="img/banner2.png" alt="Slide2"/></a></div>
			<div class="item"><a href="paginas/produtos.php"><img src="img/banner3.png" alt="Slide3"/></a></div>
		</div>
 
</div>
</section>
</div>
		<center>
			<img src="img/icons/estrela.png" alt="Slide3" class='topFilmes'/>
			<h1 class='topFilmes'><b>Top Filmes</b></h1>
			<img src="img/icons/estrela.png" alt="Slide3" class='topFilmes'/>
		</center>
	<?php
	$HARRY = "deus";
	$aleatoria = "luta";
	$harry = "Harry";
		include_once("php/buscadorDeFilmes.php");
		$buscandoFilmes = new BuscandoFilmes();
		$buscandoFilmes -> buscadorDeFilmesF($HARRY,$passei);
		$buscandoFilmes -> buscadorDeFilmesF($aleatoria,$passei);
		$buscandoFilmes -> buscadorDeFilmesF($harry,$passei);
	?>	
	</main>
	
	
	</form>
	
	<!-- Painel de Login -->
	<section class="login">
	  <h3>Login</h3>
	  <p>Faça login para poder alugar seus filmes favoritos</p>
	  <form method="POST" action='php/acoes/login.php' >
	    <input type="text" placeholder="Seu Login" name="logEntrar" required>
	    <input type="password" placeholder="Sua Senha" name="passEntrar" required>
		<input type="submit" value="Logar" id="btnLogar">
		
		
	  </form>
	   		
	  
	</section>
	
  </body>
</html>	

