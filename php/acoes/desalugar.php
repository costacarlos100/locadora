<?php
	  include("../conection.php");

	  $idCliente = $_GET['idC'];   
	  $idLocac = $_GET['id'];
	  
	  $sql = "DELETE FROM locacao WHERE idLocacao = $idLocac";
	  $mysql = $conexao -> query($sql);

	  $sql_code = "UPDATE cliente SET quant_loc = quant_loc - 1 WHERE idCliente = $idCliente"; 
	  $mysqli = $conexao -> query($sql_code);

	  if($mysql)
	   echo "<script>alert('Filme Desalugado com Sucesso'); location.href='../../paginas/carrinho.php'</script>";
     else
	   echo "Erro ao desalugar filme";
?>