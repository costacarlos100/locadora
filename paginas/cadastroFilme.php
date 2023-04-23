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
	  
	  <form method="POST" action="produtos.php">
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

	    	include("../php/cadastraFilme.php"); 
	  ?>
	    
	</nav>
	
	
	<!--Area De Cadastro-->
	<form method="POST" action="../php/acoes/cadastrar.php" enctype="multipart/form-data">
	  <div class="formCadastro">
	    <label>Nome : *<label><br/>
		<input type="text" id="nome" name="nomeFilme" required>
	  </div>
	  
	  <div class="formCadastro">
	    <label>Sinopse : *<label><br/>
		<input type="text" id="email" name="sinopse" required>
	  </div>
	  
	  <div class="formCadastro">
	    <label>Quantidade : *<label><br/>
		<input type="number" id="cpf" name="quantFilme" required>
	  </div>
	  
	  <!------------------------------------------------------------------------------------------------->
	  
	  <div class="formCadastro">
	    <label>Genero : <label><br/>
		<input type="text" id="nome" name="generoFilme">
	  </div>
	  
	  <div class="formCadastro">
	    <label>Ano : <label><br/>
		<input type="number" id="cpf" name="anoFilme" min="1900" max="2017">
	  </div>
	  
	  <div class="formCadastro">
	    <label>Duração : <label><br/>
		<input type="number" id="cpf" name="duraFilme" min="0" max="500">
	  </div>
	  
	  
	  <div class="formCadastro">
	    <label>Distribuidora : <label><br/>
		<input type="text" id="nome" name="distribFilme">
	  </div>
	  
	  <!------------------------------------------------------------------------------------------------->
	  
	  <div class="formCadastro">
	    <label>idFoto : *<label><br/>
		<input type="number" value="<?php $numberID = new CadastraFilme();  $d = $numberID -> procurandoIdFoto(); echo $d;?>" id="nasc" name="fotoFilme" required>
	  </div>
	  
	  <div class="formCadastro">
	    <label>	Arquivo : *<label><br/>
	       <input type="file" name="arquivo" >
	  </div>
	  
	  <div class="formCadastro">
	    <input type="submit" value="Cadastrar" id="cadastrar">
		<input type="reset" value="Cancelar" id="cadastrar">
	  </div>	  
	 </form> 
	
	
	<?php

	  $cadastrandoFilme = new CadastraFilme();
	?>

	
	
	
	
	
	<!-- Painel de Login -->
	<section class="login">
	  <h3>Login</h3>
	  <p>Faça login para poder alugar seus filmes favoritos</p>
	  <form method="POST" action="../index.php">
	   <input type="text" placeholder="Seu Login" name="logEntrar">
	    <input type="password" placeholder="Sua Senha" name="passEntrar">
		<input type="submit" value="Logar" id="btnLogar">
	  </form>
	</section>
	
  </body>
</html>