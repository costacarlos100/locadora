<?php 
  $host="localhost";
  $user="root";
  $pass="";
  $database="locadora";
	
  $conexao=new mysqli($host, $user, $pass, $database);
   // verificando se houve erro ao conectar
   
    if($conexao->connect_error){
	  echo"Erro: ".$conexao->connect_error;
	exit;
   }
?>