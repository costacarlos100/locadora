<?php
	include("conection.php");
		if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['cpf']) && isset($_POST['nasc']) && isset($_POST['login'])){
		   $nome = $_POST['nome'];
		   $email = $_POST['email'];
		   $cpf = $_POST['cpf'];
		   $nasc = $_POST['nasc'];
		   $login = $_POST['login'];
		   $senha = md5($_POST['pass']);
		   
		   include_once("cadastraFilme.php");
		   $numberID = new CadastraFilme();  $d = $numberID -> procurandoIdFoto();
		  
		   $sql = "INSERT INTO cliente (idCliente, nome, email, cpf, data_nascimento, login, senha, permissao, quant_loc, idFoto) ";
			   
		   $sql .= "VALUES (NULL, '$nome', '$email', '$cpf', '$nasc', '$login', '$senha', '1', NULL, $d);";
			   
		if(isset($_FILES['arquivo'])){	
	     
	     	$extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
	     	$novo_nome = md5(time()).$extensao;
	     	$diretorio = "../img/clientes/";

	  	 	move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); 
				$sqli = "insert into foto values ('$d','$novo_nome');";
				$mysqli = $conexao->query($sqli);
			}

		   $result=$conexao->query($sql);
			   
		   if($result){
			  echo "<script>alert('Cadastro Efetuado Com Sucesso!!!'); location.href='../paginas/produtos.php'</script>";
		   }else{
			  echo "<script>alert('Erro Ao Fazer Cadastro - Login = $login já existente'); location.href='../paginas/clientes.php'</script>";
		   }
			   			
			}
?>	
