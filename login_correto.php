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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Bayern Brasil">
    <meta name="author" content="Mariana Rodrigues">

		<title>Bayern Brasil</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/jquery.min.js"></script>
    <!-- <script src="bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <link href="css/estilo1.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="login_correto.php">Bayern Story BR</a>
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

        <header class="masthead" style="background-image: url('img/w1.jpg')">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="page-heading">
                            <h1>Bayern Store</h1>
                            <span class="subheading">Ola Adm !</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">



        <?php
        include_once "conexao.php";

            $sql1 = "SELECT * FROM sobre WHERE id_s = 1 ";
            $conexao = conecta_mysql();
            $result = mysqli_query($conexao,$sql1);
            if ($result) {
                $mensagem = mysqli_fetch_array($result, MYSQLI_ASSOC);

            }
        ?>
        <form method="post" action="">
          <p>
            <label for="" class="col-sm-0 col-form-label"> <b>Texto: </b></label> <br/>
            <textarea id="mensagem" name="mensagem" class="form-control" rows="4"><?php print $mensagem["sobre"];?></textarea>
          </p>

          <center>
          <input type="submit" value="Postar"/>
          <input type="reset" value="Cancelar"/> <br><br> </center>
					</br></br></br></br></br>
        </form>

        <?php
        if (isset($_POST["mensagem"])) {
        		$mensagem = $_POST["mensagem"];
            if (strlen($mensagem)>1) {
            $conexao = conecta_mysql();
            $sql = "UPDATE sobre SET sobre='$mensagem' WHERE id_s = 1";

            if (mysqli_query($conexao,$sql)) {
              print "Postagem alterada!";
            }
            else {
              print "Erro ao alterar a postagem.";
              }
            }
            else {
              print "Você não digitou nenhuma mensagem.";
            }
        }
        ?>
      </div>
