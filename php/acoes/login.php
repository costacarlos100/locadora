<?php
include_once("../logando.php");
$logEntrar = $_POST['logEntrar'];
$passEntrar = md5($_POST['passEntrar']);
$logar = new Logando;
$logar -> login($logEntrar , $passEntrar);
?>