<?php
   include("conection.php");
	
   if(isset($_SESSION['login'])){
	   $login = $_SESSION['login'];
	$sql = "SELECT * FROM cliente inner join foto on cliente.idFoto = foto.idFoto where login = '$login'";

	$mysql = $conexao -> query($sql);

	if($mysql){
		while($linha = $mysql->fetch_assoc()){
			$_SESSION['idCliente'] = $linha['idCliente'];
			$nomeCliente  = $linha['nome'];
			$emailCliente = $linha['email']; 
			$cpfNaoForma   = $linha['cpf'];
			$nascCliente  = $linha['data_nascimento'];
			$loginCliente = $linha['login'];
			$permCliente  = $linha['permissao'];
			$fotoCliente  = $linha['arquivo'];
		}
	}
		
		//Atribuindo Nome à permissão  
		if($permCliente==1){
			$permissao = 'Visitante';
		}elseif($permCliente == 2){
			$permissao = 'Administrador';
		}else{
			session_destroy();
		}

		//Organizando O CPF
		$cpfCliente="";
		for($i=0;$i<11;$i++){
			$cpfCliente=$cpfCliente.$cpfNaoForma[$i];
				if($i==2||$i==5){
					$cpfCliente=$cpfCliente.".";
				}
				if($i==8){
					$cpfCliente=$cpfCliente."-";
				}
		}
		
		$data_nascimento = organizandoDatas($nascCliente);
		echo "<div class='ClienteInfo'>";
			echo "<div class='fotoCliente'>";
				echo "<img src='../img/clientes/$fotoCliente'/>";
			echo "</div>";
			echo "<h3><span>Nome: </span> $nomeCliente  </h3><br>";
			echo "<h3><span>Email: </span> $emailCliente </h3><br>";
			echo "<h3><span>CPF: </span> $cpfCliente</h3><br>";
			echo "<h3><span>Data De Nascimento: </span> $data_nascimento</h3><br>";
			echo "<h3><span>Login: </span>$loginCliente</h3><br>";
			echo "<h3><span>Nivel De Acesso: </span>$permissao</h3><br>";
		echo "</div>";
   }else{
	   echo "Usuário não logado";
   }
   
   
   
  //Função Para Ver Os Filmes Alugados
   function filmesAlugados(){
	include("conection.php");
	
	if(isset($_SESSION['idCliente'])){
	  $idCliente = $_SESSION['idCliente'];
	  
	  $sql_code = "SELECT locacao.idLocacao, locacao.data_loc,locacao.data_dev, filme.nome FROM locacao INNER JOIN cliente INNER JOIN filme on locacao.idCliente = cliente.idCliente and locacao.idFilme = filme.idFilme where locacao.idCliente = $idCliente;";
	  $mysql_code = $conexao -> query($sql_code);
	  
	    echo "<h2 class='filmesAlug'>Filme(s) Alugado(s)</h2>";
	  
		while($linha = $mysql_code->fetch_assoc()){
			$idLocacao = $linha['idLocacao'];
			$nome = $linha['nome'];
			$dataAlug = $linha['data_loc'];
			$dataDev = $linha['data_dev'];
			$dataAlugado = organizandoDatas($dataAlug);
			$dataDevolucao = organizandoDatas($dataDev);
			
		 //Exibindo Os Resultados
		echo "<div class='filmesAlugados'>";	  
		  echo "<fieldset>";
		    echo "<legend>$nome</legend>";
			 echo "<h3>Data de Aluguel: $dataAlugado</h3>";
			 echo "<h3>Data De Devolução: $dataDevolucao</h3><br>";
			 echo "<a href='../php/acoes/desalugar.php?id=$idLocacao&&idC=$idCliente'><input type='submit' class='btnAluga btn-red' value='Desalugar' ></a>";
		  echo "</fieldset>";
	    echo "</div>";
		
		
	  }
   }  
   
   }
   function organizandoDatas($data){
	       
	       if(strlen($data) <= 10){
				$ano = substr($data,0,4);
				$mes = substr($data,5,2);
				$dia = substr($data,8,2);
				$horario = "$dia/$mes/$ano";
		   }else{
				$ano = substr($data,0,4);
				$mes = substr($data,5,2);
				$dia = substr($data,8,2);
				$hora = substr($data,11,2);
				$minutos = substr($data,14,2);
				//echo "$dia/$mes/$ano às $hora:$minutos";
				$horario = "$dia/$mes/$ano às $hora:$minutos";
		   }
			return $horario;   
  }
 
?>
			     
				 