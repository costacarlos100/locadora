<?php

	require("../php/acoes/protected.php");
	$caminho = "..";
	protect($caminho);


	include("conection.php");
	if(isset($_GET['us']) and isset($_GET['idF'])){
	$idFilme =  mysqli_real_escape_string($conexao, $_GET['idF']);
	$login = mysqli_real_escape_string($conexao, $_GET['us']);
	
	//echo "<script>alert('$login,$idFilme')</script>";

	$mysql = "Select idCliente from cliente where login = '$login'";
	$result = $conexao->query($mysql);
	if($linha = $result->fetch_assoc()){ $idCliente = $linha['idCliente']; }
	
	//echo "<script>alert('$idCliente')</script>";

	$dataAtual = date('Y-m-d H:i:s');
	$dia = date('d')+15;
	$mes = date('m');
	$ano = date('Y');
	$hora = date('H:i:s');
	
	while($dia>30){
		$mes = $mes+1;
		$dia = $dia-$mes;
	}
	
	$dataDev = "$ano-$mes-$dia $hora";
	
	$quantFilme = "SELECT quant FROM filme WHERE idFilme = '$idFilme'";
	$comandos = $conexao -> query($quantFilme);
	
	if($linha = $comandos -> fetch_assoc()){$quantidade = $linha['quant'];}

		if($quantidade > 0){
			//Verificando se o usuário não está alugando mais de três filmes!!
			$restricao = "SELECT quant_loc FROM cliente where idCliente = '$idCliente';";
			$result = $conexao-> query($restricao);
			if($linha = $result -> fetch_assoc()){$quant_loc = $linha['quant_loc'];}
			
			if($quant_loc >= 3){
				echo "<script>alert('Você já alugou mais de três filmes - Limite lotado'); location.href='../paginas/produtos.php';</script>";
				exit;
			}else{
				$
				//A cada atualização é atribuido -1 a quantidade...
				$quantidade = "update filme SET quant = quant - 1 WHERE idFilme = $idFilme and cliente.quant_loc += 1; ";
				$resultado = $conexao->query($quantidade);
				//Atualiza a quantidade de alugada para +1
				$quant_loc = "UPDATE cliente SET quant_loc = quant_loc + 1 WHERE idCliente = $idCliente;";
				$resulta = $conexao->query($quant_loc);
				
				//Inserindo os valores após o usuário clicar em alugar na tabela...
				$mysql_code = "INSERT INTO logfilme VALUES (NULL,'$idFilme','$idCliente')";
				$resul_code = $conexao->query($mysql_code);
				//Inserindo os valores após o usuário clicar em alugar na tabela...
				$mysql = "INSERT INTO locacao VALUES (NULL,'$dataAtual','$dataDev','$idCliente','$idFilme')";
				$resul = $conexao->query($mysql);

			
			  if($resul){
				echo "<script>alert('Aluguel Efetuado Com Sucesso'); location.href='../paginas/produtos.php';</script>";
			  }else{
				echo "<script>alert('Falha ao Aluga o Filme!! '); location.href='../paginas/produtos.php';</script>";
			  }
}
	}else{
		echo "<script>alert('Não foi possível alugar, O estoque está vazio!!!'); location.href='../paginas/produtos.php';</script>";
		//$code = "UPDATE filme SET quant = quant -1 WHERE filme.idFilme = $idFilme";
		//$my = $conexao->query($code);
		
		
	}
 }
?>