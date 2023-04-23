<?php
	require("protected.php");
	$caminho = "..";
	protect($caminho);
	
	session_start();
	session_destroy();
	header("Location: ../../index.php");



?>