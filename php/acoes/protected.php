<?php
   if(!function_exists("protect")){
	   function protect($caminho){
		   if(!isset($_SESSION))
			   session_start();
		   
		   if(!isset($_SESSION['login'])){
			   header("Location: $caminho/index.php");
		   }
	   }
   }


?>