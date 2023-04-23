<head>
   <link rel="stylesheet" href="../css/styles.css" />
</head>


<?php
Class BuscandoFilmes{	
	public function painel($passei){
		if(!isset($_SESSION))
			session_start();
		
		if(isset($_SESSION['permissao'])){
			if($_SESSION['permissao']==2){			  
				echo "<li> <a href='adm.php'>Painel Administrativo</a> </li>";
		    }
		}
	}

		
	public function userLogado($passei){
		$Logando = new Logando();
		
		if(isset($_SESSION['login'])){
		 $nome = $_SESSION['login'];
		 
		include("conection.php");
	
		$sql="SELECT foto.idFoto,foto.arquivo from foto INNER JOIN cliente ON foto.idFoto = cliente.idFoto WHERE cliente.login = '$nome'";

		$mysql= $conexao -> query($sql);

			while($linha=$mysql->fetch_assoc()){
				$foto = $linha['arquivo'];
			}
			   
		 
		 if($nome != NULL){
		     echo "<div class='chip'>";
			    if($passei == '1'){
				  echo "<img src='img/clientes/$foto'/>";
				  echo "<a class='usuario' href='php/acoes/logout.php'>X</a>";
				}else{
				  echo "<img src='../img/clientes/$foto'/>";
				  echo "<a class='usuario' href='../php/acoes/logout.php' >X</a>";
				}
				 echo "<span>Nome: $nome</span>";
			   echo "</div>";
		  }
		}
		}
	

	public function cortaTexto($sinopseFilme, $max = 150){
		   $texto = strip_tags($sinopseFilme);
		   $conta = strlen($texto);
		   
		   if($conta <= $max){
			   return $texto;
		   }else{
			   $cortaText = substr($texto,0,$max);
			   $espaco = strrpos($cortaText, ' ');
			   $limita = substr($cortaText,0,$espaco);
			   
			   return $limita.'';
		   }
	   }


	public function buscadorDeFilmesF($buscarFilmess,$passei){
	  
	    require("conection.php");
		$sql="SELECT filme.idFilme,filme.nome,filme.sinopse,foto.arquivo FROM filme inner join foto on filme.idFoto = foto.idFoto where filme.nome like '%$buscarFilmess%' or filme.sinopse like '%$buscarFilmess%';";

		$result=$conexao->query($sql);

		//verificando se o resultado existe
	if(isset($_SESSION['login'])){
		$nome = $_SESSION['login'];
	}	
		
		if($result){
			
			/* roda enquanto coneguir rodar uma linha do resultado */
			while($linha=$result->fetch_assoc()){
				
				$foto = $linha['arquivo'];
				$nomeFilme = $linha['nome'];
				$sinopseFilme = $linha['sinopse'];
				$idFilme = $linha['idFilme'];
				$cortaText1 = new BuscandoFilmes;
				$sinopse = $cortaText1 -> cortaTexto($sinopseFilme);
				
			   echo "<div class='filmesOrdem'>";
				 echo "<div class='foto'>";
				 if($passei==1){
						echo "<img src='img/upload/$foto'/>";
					}elseif($passei==2){
						echo "<img src='../img/upload/$foto'/>";
				}  
				 echo "</div>";
				 echo "<h3><span>Nome:</span> $nomeFilme</h3>";
				 echo "<h3><span>Descrição:</span> $sinopse</h3>";
				  if($passei==1){
				 if(isset($_SESSION['login'])){
					echo "<h3><a href='php/alugando.php?idF=$idFilme&&us=$nome' ><input type='submit' class='btnAluga btn-green' value='Clique aqui para alugar'></a></h3>";
				 }else{
				   echo "<h3><a href='paginas/clientes.php'><input type='submit' class='btnAluga btn-red' value='Cadastre-se'></a></h3>";
				 }
				  }else{
					  if(isset($_SESSION['login'])){
					echo "<h3><a href='../php/alugando.php?idF=$idFilme&&us=$nome' ><input type='submit' class='btnAluga btn-green' value='Clique aqui para alugar'></a></h3>";
				 }else{
				   echo "<h3><a href='../paginas/clientes.php'><input type='submit' class='btnAluga btn-red' value='Cadastre-se'></a></h3>";
				 }
				  }
			   echo "</div>";
			}
		}
	}

		
	public function buscaFilmeAutoF(){
	    require("conection.php");
		$sql="SELECT filme.idFilme,filme.nome,filme.sinopse,foto.arquivo FROM filme inner join foto
		on filme.idFoto = foto.idFoto order by filme.nome;";

		$result=$conexao->query($sql);

		//verificando se o resultado existe
	if(isset($_SESSION['login'])){
		$nome = $_SESSION['login'];
	}	
		
		if($result){
			
			/* roda enquanto coneguir rodar uma linha do resultado */
			while($linha=$result->fetch_assoc()){
				
				$foto = $linha['arquivo'];
				$nomeFilme = $linha['nome'];
				$sinopseFilme = $linha['sinopse'];
				$idFilme = $linha['idFilme'];
				$cortaText1 = new BuscandoFilmes;
				$sinopse = $cortaText1 -> cortaTexto($sinopseFilme);
				
			   echo "<div class='filmesOrdem'>";
				 echo "<div class='foto'>";
				  echo "<img src='../img/upload/$foto'/>";
				 echo "</div>";
				 echo "<h3><span>Nome:</span> $nomeFilme</h3>";
				 echo "<h3><span>Descrição:</span> $sinopse <a href='informacoes.php?filme=$idFilme'>...<img src='../img/icons/mais.png' class='mais' alt='Slide3'/></h3>";
				 if(isset($_SESSION['login'])){
				 echo "<h3><a href='../php/alugando.php?idF=$idFilme&&us=$nome' ><input type='submit' class='btnAluga btn-green' value='Alugue'></a></h3>";
				 }else{
				   echo "<h3><a href='../paginas/clientes.php'><input type='submit' class='btnAluga btn-red' value='Cadastre-se'></a></h3>";
				 }
			   echo "</div>";
		    }
		 }
		}
	   
   }	    
?>
