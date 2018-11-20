<?php
session_start();
if ( !isset($_SESSION["cod_adm"])){
	header("location:index_erro.php?erro=2");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="">
    <meta name="description" content="Bayern Brasil">
    <meta name="author" content="Mariana Rodrigues">

		<title>Bayern Brasil</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/jquery.min.js"></script>
    <link href="css/estilo1.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="login_correto.php">Bayern Store BR</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="login_correto.php">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="mensagens.php">Mensagens</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="logout.php">Sair</a>
                  </li>
                </ul>
            </div>
        </div>
    </nav>

		    <header class="masthead" style="background-image: url('img/w6.jpg')">
		        <div class="overlay"></div>
		        <div class="container">
		            <div class="row">
		                <div class="col-lg-8 col-md-10 mx-auto">
		                    <div class="site-heading">
		                        <h1>Bayern Store</h1>
		                        <span class="subheading">verifique suas mensagens</span>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </header>


		<div class="container">
			<center> <h2> Mensagens Recebidas: </h2> </center>

			<?php
		include_once "conexao.php";
		$conexao = conecta_mysql();
		$sql = "SELECT * FROM mensagens ORDER BY id_mensagem desc" ;
		$resultado = mysqli_query($conexao,$sql);
		if($resultado){
			$mensagens = array();
			while($linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
				$mensagens[] = $linha;
			}
			foreach ($mensagens as $mensagem){
				print "<div id='postagem' class='clear'>";
				print "<br><b> Nome: </b>".$mensagem["nome_mens"];
				print "<br> <b>Email: </b>".$mensagem["email_mens"];
				print "<br> <b> Texto da Mensagem: </b>".$mensagem["mensagem"];
				print "<a href='mensagens.php?codigo=".$mensagem["id_mensagem"]."'><br>Excluir </a>";
				print "<br><br><br><br>";
				print "</div>";
			}
			if (isset($_GET["codigo"]) ){
				$id = $_GET['codigo'];
				$sql = "DELETE FROM mensagens WHERE id_mensagem = $id";
				$conexao = conecta_mysql();
				$resultado = mysqli_query($conexao,$sql);
				if($resultado){
					print "<script language='javascript'> alert('Postagem excluída, por favor atualize a página') </script>";
				}
				else{
					print "<script language='javascript'> alert('Código da postagem não encontrada') </script>";
				}
			}
		}
		?>
