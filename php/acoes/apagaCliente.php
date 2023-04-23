<?php
	require("conection.php");
	if(isset($_GET['apaga'])){
	   $apaga = mysqli_real_escape_string($conexao,$_GET['apaga']);
	   $sqlApaga = "DELETE FROM cliente WHERE cliente.idCliente = $apaga;";
	   $sqlApagaFoto = "DELETE FROM foto WHERE foto.idFoto = $apaga;";

	   $mysqli = $conexao -> query($sqlApaga);
	   $mysqle = $conexao -> query($sqlApagaFoto);

	   if($mysqli and $mysqle){
	   		echo "<script>alert('Cliente Deletado Com Sucesso'); location.href='../../index.php';</script>";
	   }else{
	   		echo "<script>alert('Falha ao deletado arquivo'); location.href='../../paginas/editaFilmes.php';</script>";
	   }
 	}

 ?>