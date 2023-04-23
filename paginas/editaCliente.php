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
	     
	  ?>
	  
	</nav> 
	
	
	<main class="principal">
	
	<center>
		<h2>Selecione o Cliente Para Editar | Apagar</h2>
	</center>

	<br>
	
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




<?php
	   	require("../php/conection.php");
		$sql="SELECT * FROM cliente;";
		//SELECT * FROM cliente inner join foto on filme.idFoto = foto.idFoto order by filme.nome;

		$result=$conexao->query($sql);

		//verificando se o resultado existe
	if(isset($_SESSION['login'])){
		$nome = $_SESSION['login'];
	}	
		
		if($result){
			
			/* roda enquanto coneguir rodar uma linha do resultado */
			while($linha=$result->fetch_assoc()){
				$idCliente = $linha['idCliente'];
				//$foto = $linha['arquivo'];
				$nome = $linha['nome'];
				$email = $linha['email'];
				$cpf = $linha['cpf'];
				$data_nascimento = $linha['data_nascimento'];
				$login = $linha['login'];
				$senha = $linha['senha'];

			   echo "<div class='filmesOrdem'>";
				 echo "<div class='foto'>";
				 // echo "<img src='../img/upload/$foto'/>";
				 echo "</div>";
				 echo "<h3><span>Nome:</span> $nome</h3>";
				 echo "<h3>E-Mail: $email</h3>"; 
				 echo "<h3>CPF: $cpf</h3>";
				 echo "<h3>Data de Nascimento: $data_nascimento</h3>";
				 echo "<h3>login: $login</h3>";
				  echo "<h3>senha: $senha</h3>";
				 echo "<h3><a href='editores/editarCliente.php?id=$idCliente'><input type='submit' class='btnAluga btn-green' value='Editar'></a>   <a href='../php/acoes/apagaCliente.php?apaga=$idCliente'><input type='submit' class='btnAluga btn-green' value='Apagar'></a></h3>";
				echo "</div>";
			   echo "</div>";
		    }
		 }