<?php
	include("../../php/conection.php");
	include("../../php/buscadorDeFilmes.php");
	require("../../php/acoes/protected.php");
	$caminho = "../..";
	protect($caminho);
	  	   	  
	   $id = mysqli_real_escape_string($conexao,$_GET['id']);
		
   //echo "<script>alert('$id')</script>";
   $sqlCode = "SELECT * FROM cliente where idCliente = $id";
   $mySQLC = $conexao->query($sqlCode);
   $linha = $mySQLC->fetch_assoc();
   if(!$linha){
		echo "<script>alert('Erro!!'); location.href='../../index.php';</script>";
		exit;
   }else{
	
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Locadora - Editar Cliente</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="../../css/styles.css" />
  </head>
  <body>
    <header class="cabecalho">
	  <h1 class="logo">
		<a href="index.php" title="Locadora"><img src="../../img/logo.png" /></a>  
	  </h1>
	  
	  <form method="POST">
	    <input type="text" placeholder="Faça uma busca">
		<input type="submit" value="Buscar">
	  </form>
    </header>
	
	<nav class="menu">
	  <ul>
	    <li> <a href="../../index.php">Home</a> </li>
	    <li> <a href="">Produtos</a> </li>
		<li> <a href="../../clientes.php">Cadastre-se</a> </li>
	    <li> <a href="">Carrinho</a> </li>
	
		</ul>
	      
	</nav>

	

		
	<!--Area De Cadastro-->
	<form method="POST" action="editarCliente.php?id=<?php echo $id;?>" enctype="multipart/form-data">
	  <div class="formCadastro">
	    <label>Nome : *<label><br/>
		<input type="text" id="nome" name="nome" value="<?php echo $linha['nome']?>" required>
	  </div>
	  
	  <div class="formCadastro">
	    <label>Email : *<label><br/>
		<input type="text" id="email" name="email" value="<?php echo $linha['email']?>" required>
	  </div>

	  <div class="formCadastro">
	    <label>CPF : *<label><br/>
		<input type="text" id="cpf" name="cpf" value="<?php echo $linha['cpf']?>" required>
	  </div>

	  <div class="formCadastro">
	    <label>Data de Nascimento : *<label><br/>
		<input type="text" id="data" name="data" value="<?php echo $linha['data_nascimento']?>" required>
	  </div>

	  <div class="formCadastro">
	    <label>Login : *<label><br/>
		<input type="text" id="login" name="login" value="<?php echo $linha['login']?>" required>
	  </div>
	  
	  <div class="formCadastro">
	    <label>Login : *<label><br/>
		<input type="text" id="senha" name="senha" value="<?php echo $linha['senha']?>" required>
	  </div>

	  <div class="formCadastro">
	    <input type="submit" value="Cadastrar" id="cadastrar">
		<input type="reset" value="Cancelar" id="cadastrar">
	  </div>	  
	 </form> 
	
	
	<?php
	  require("../../php/cadastraFilme.php");
	  $cadastrandoFilme = new CadastraFilme();
	}
	?>
	
	<?php
	
	if(isset($_POST['nome'])){
	   $nome = $_POST['nome'];
	   $email = $_POST['email'];
	   $cpf = $_POST['cpf'];
	   $data_nascimento = $_POST['data'];
	   $login = $_POST['login'];
	   $senha = $_POST['senha'];
	   
	   $sql_code = "UPDATE cliente SET nome = '$nome', email = '$email', cpf = '$cpf', data_nascimento = '$data_nascimento',login = '$login', senha = '$senha' WHERE cliente.idCliente = $id;";
	   
	   $mysqlii = $conexao->query($sql_code) or die($conexao->error);	
	   if($mysqlii){
		   echo "<script> alert('Atualização feita com Sucesso'); location.href='editarCliente.php?id=$id'; </script>";
	   }else{
		   echo "<script> alert('Erro ao Fazer Atualização'); location.href='editarCliente.php?id=$id'; </script>";
	   }     
   
   }

?>
	
	
	
	<!-- Painel de Login -->
	<section class="login">
	  <h3>Login</h3>
	  <p>Faça login para poder alugar seus filmes favoritos</p>
	  <form method="POST" action="../../index.php">
	   <input type="text" placeholder="Seu Login" name="logEntrar">
	    <input type="password" placeholder="Sua Senha" name="passEntrar">
		<input type="submit" value="Logar" id="btnLogar">
	  </form>
	</section>
	
  </body>
</html>	



