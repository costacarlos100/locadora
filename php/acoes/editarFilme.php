<?php
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
				  echo "<img src='../../img/upload/$foto'/>";
				 echo "</div>";
				 echo "<h3><span>Nome:</span> $nomeFilme</h3>";
				 echo "<h3><span>Descrição:</span> $sinopse <a href='informacoes.php?filme=$idFilme'>...<img src='../img/icons/mais.png' class='mais' alt='Slide3'/></h3>";
				 echo "<h3><a href='../../paginas/editores/editarFilme.php?id=$idFilme'><input type='submit' class='btnAluga btn-green' value='Clique aqui para Editar'></a></h3>";
			   echo "</div>";
		    }
		 }
	  	   	  
?>