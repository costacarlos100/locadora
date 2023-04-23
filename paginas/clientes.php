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
		<a href="../index.php" title="Locadora"><img src="../img/logo.png" /></a>  
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
	     
	  ?>
		
	</nav>

   <!--Area De Cadastro-->
	<form method="POST" action="../php/cadastro.php" enctype="multipart/form-data">
	  <div class="formCadastro">
	    <label>Nome : <label>*</label></label><br/>
		<input type="text" id="nome" name="nome" required>
	  </div>
	  
	  <div class="formCadastro">
	    <label>Email : <label>*</label></label><br/>
		<input type="email" id="email" name="email" required>
	  </div>
	  
	  <div class="formCadastro">
	    <label>CPF : <label>*</label></label><br/>
		<input type="number" id="cpf" name="cpf" min=00000000000 max=99999999999 required>
	  </div>
	  
	  <div class="formCadastro">
	    <label>Data De Nascimento : <label>*</label></label><br/>
		<input type="date" id="nasc" name="nasc" required>
	  </div>
	  
	  <div class="formCadastro">
	    <label>Login : <label>*</label></label><br/>
		<input type="text" id="login" name="login" required> 
	  </div>
	  
	  <div class="formCadastro">
	    <label>Senha : <label>*</label></label><br/>
		<input type="password" id="pass" name="pass" required min="8">
	  </div>
	  
	  <div class="formCadastro">
	    <label>	Arquivo: <label>*</label></label><br/>
	       <input type="file" name="arquivo">
	  </div>
	  
	  <div class="formCadastro">
	    <input type="submit" value="Cadastrar" id="cadastrar">
		<input type="reset" value="Cancelar" id="cadastrar">
	  </div>	  
	 </form> 
   
   
   <!-- Painel de Login -->
   <section class="login">
	  <h3>Login</h3>
	  <p>Faça login para poder alugar seus filmes favoritos</p>
	  <form method="POST" action='../php/acoes/login.php'>
	    <input type="text" placeholder="Seu Login" name="logEntrar">
	    <input type="password" placeholder="Sua Senha" name="passEntrar">
		<input type="submit" value="Logar" id="btnLogar">
	  </form>
	</section>
	
  </body>
</html>