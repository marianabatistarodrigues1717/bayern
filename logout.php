<?php
//Mariana Rodrigues
	session_start();
	unset($_SESSION["id_usuario"]);
	unset($_SESSION["senha"]);
	unset($_SESSION["email"]);
	unset($_SESSION["nome_usuario"]);


	header("location:index.php");
?>
