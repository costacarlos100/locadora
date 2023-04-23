<!DOCTYPE html>
<html>
  <head>
    <title>Locadora</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="../css/styles.css" />
	<link rel="stylesheet" href="../css/materialize.css" />
  </head>
  <body>
    <header class="cabecalho">
	  <h1 class="logo">
		<a href="index.php" title="Locadora"><img src="../img/logo.png" /></a>  
	  </h1>
	  
	  <form method="POST">
	    <input type="text" placeholder="Faça uma busca" name="buscarFilmess">
		<input type="submit" value="Buscar">
	  </form>
    </header>
	
	<nav class="menu">
	  <ul>
	    <li><img src="../img/icons/home.png"/><a href="../index.php">Home</a> </li>
	    <li><img src="../img/icons/video.png"/> <a href="produtos.php">Filmes</a> </li>
		<li><img src="../img/icons/cadastro2.png"/> <a href="clientes.php">Cadastre-se</a> </li>
	    <li> <a href="carrinho.php">Carrinho</a> </li>
		<?php
			$passei = 2;
			include_once("../php/logando.php");
			include_once("../php/buscadorDeFilmes.php");
			$BuscandoFilmes = new BuscandoFilmes;
			$BuscandoFilmes -> painel($passei);
		echo "</ul>";
			$BuscandoFilmes = new BuscandoFilmes;
			$BuscandoFilmes -> userLogado($passei);
	     
	  ?>
	  
	</nav> 
	
	
	<main class="principal">
	
	<h2 align="center" id="frase">Nossos Filmes</h2>
	
	<?php
			
		  if(isset($_POST['buscarFilmess'])){
			if($buscarFilmess = $_POST['buscarFilmess']){
			$BuscandoFilmes = new BuscandoFilmes;
			$BuscandoFilmes -> buscadorDeFilmesF($buscarFilmess,$passei);
			}
			}else{
			$BuscandoFilmes = new BuscandoFilmes;
			$BuscandoFilmes -> buscaFilmeAutoF();
			}
		  
		?>
	
	
	</main>
	
	
	</form>
	
	<!-- Painel de Login -->
	<section class="login">
	  <h3>Login</h3>
	  <p>Faça login para poder alugar seus filmes favoritos</p>
	  <form method="POST" action='../php/acoes/login.php' >
	    <input type="text" placeholder="Seu Login" name="logEntrar">
	    <input type="password" placeholder="Sua Senha" name="passEntrar">
		<input type="submit" value="Logar" id="btnLogar">
		
		
	  </form>
	</section>
	
  </body>
</html>	

