<?php

class CadastraFilme{

  public function cadastrar($nomeFilme , $sinopse, $quantFilme, $fotoFilme,$genero,$ano,$duracao,$distr){
		include("conection.php");
	 if(isset($_POST['nomeFilme']) && isset($_POST['sinopse']) && isset($_POST['quantFilme'])){
	
	   $sql = "insert into filme values (NULL,'$nomeFilme','$sinopse','$quantFilme','$fotoFilme','$genero','$ano','$duracao','$distr');";
	   
	   $mysql = $conexao->query($sql);
			
	   $buscaidFoto = "Select foto.idFoto,filme.nome from filme inner join foto on foto.idFoto = filme.idFoto where foto.idFoto = $fotoFilme and filme.idFoto = $fotoFilme;";
	   
	   $mysqli = $conexao->query($buscaidFoto);
	   if($mysqli){
			echo "<script>alert('Cadastro Efetuado Com Sucesso!!');location.href='../../paginas/cadastroFilme.php'</script>";
	   }else{
		   echo "<script>alert('Erro ao cadastrar!!');</script>";
		   exit;
	   }
	 }
  }

  

  public function upImagem($fotoFilme){
	  include("conection.php");

	     if(isset($_FILES['arquivo'])){	
	     
	     $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
	     $novo_nome = md5(time()).$extensao;
	     $diretorio = "../img/upload/";

	  	 move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); 
	   
	     $sql = "insert into foto values ('$fotoFilme','$novo_nome');";
		  $mysql = $conexao->query($sql);
		}
     }
  
		public function procurandoIdFoto(){
				  include("conection.php");
				  
				  $sql = "select idFoto from foto";
				  
				  $mysql= $conexao -> query($sql);
			
				  while($linha=$mysql->fetch_assoc()){
					while($linha1=$mysql->fetch_assoc()){
						if($linha['idFoto'] < $linha1['idFoto']){
								$n = $linha1['idFoto']+1;
						}
					}
					
				  }
				  return $n;
			}

		  
  }

?>