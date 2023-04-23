<?php 

class Logando{


// FUNÇÃO PARA FAZER O LOGIN
function login($logEntrar , $passEntrar){
	include("conection.php");

	if(empty($_POST['logEntrar']) or empty($_POST['passEntrar'])){
		header("location: ../../index.php");
		exit;
	};
	
	$sql = "SELECT * FROM cliente WHERE login ='$logEntrar' AND senha='$passEntrar'";
	$resul=$conexao->query($sql);

	if(!$resul <= 0){
		if($linha=$resul->fetch_assoc()){
			
			session_start();
			$_SESSION['login']=$_POST['logEntrar'];	
			$_SESSION['senha']=$_POST['passEntrar'];	
			$_SESSION['idCliente']=$linha['idCliente'];	
				if($linha['permissao'] == 2){
					$_SESSION['permissao'] = $linha['permissao'];
					header("location: ../../paginas/adm.php");		
				}else{
					header("location: ../../index.php");
				}
			
		}else{
		   header("location: ../../index.php");
		   exit;
			
		}
	 }
   }
 }

?>