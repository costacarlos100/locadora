<?php
	
	
	include_once"../cadastraFilme.php";
	
	
	$nomeFilme = $_POST['nomeFilme'];
	$sinopse = $_POST['sinopse'];
	$quantFilme = $_POST['quantFilme'];
	$fotoFilme = $_POST['fotoFilme'];
	$genero = $_POST['generoFilme'];
	$ano = $_POST['anoFilme'];
	$duracao = $_POST['duraFilme'];
	$distr = $_POST['distribFilme'];
	
	
	$cadastrandoFilme = new CadastraFilme;
	$cadastrandoFilme -> cadastrar($nomeFilme, $sinopse,$quantFilme,$fotoFilme, $genero, $ano, $duracao, $distr);
	$cadastrandoFilme = new CadastraFilme;
	$cadastrandoFilme -> upImagem($fotoFilme);
	
?>