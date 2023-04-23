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
	
    <?php
		include("../php/conection.php");
		
		if(isset($_SESSION['login'])){
			$nomeCliente = $_SESSION['login'];
		}	
		if(isset($_GET['filme'])){
			$filme = $_GET['filme'];
			
			$sql = "SELECT * FROM filme inner join foto on filme.idFoto = foto.idFoto where idFilme = $filme";
			$mysql = $conexao -> query($sql);
			
			while($linha = $mysql->fetch_assoc()){
				$idFilme = $linha['idFilme'];
				$foto = $linha['arquivo'];
				$nome = $linha['nome'];
				$descricao = $linha['sinopse'];
				$genero = $linha['genero'];
				$ano = $linha['ano'];
				$dura = $linha['duracao'];
				$duracao = organizaHora($dura);
				$distrib = $linha['Distribuidora'];
				
				echo "<div class='infoFilme'>";
					echo "<img src='../img/upload/$foto' title='filme'/>";
					echo "<h3><label>Nome:</label> $nome</h3>";
					echo "<h3><label>Descrição:</label> $descricao</h3>";
					echo "<h3><label>Genero:</label> $genero</h3>";
					echo "<h3><label>Ano:</label> $ano</h3>";
					echo "<h3><label>Duração:</label> $duracao</h3>";
					echo "<h3><label>Produtora:</label> $distrib</h3>";
				  if(isset($_SESSION['login'])){
					echo "<h3><a href='../php/alugando.php?idF=$idFilme&&us=$nomeCliente'><input type='submit' class='btnAluga btn-green' value='Clique aqui para alugar'></a></h3>";
					}else{
				   echo "<h3><a href='../paginas/clientes.php'><input type='submit' class='btnAluga btn-red' value='Cadastre-se Clicando Aqui'></a></h3>";
				 }
				echo "</div>";

		
		}
	}
		
		
		function organizaHora($minutos){
		$hora = 0;
			while($minutos>=60){
				$minutos -= 60;
				$hora += 1;	
			}
			if($hora<2){
				$horario = "$hora hora e $minutos minutos";
			}else{
				$horario = "$hora horas e $minutos minutos";
			}
			return $horario;
	}	
						
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