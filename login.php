<?php

                if ( isset($_POST["email"]) ){
                    $email = $_POST["email"];
    				$senha = $_POST["senha"];
    				include_once "conexao.php";
    				$conexao = conecta_mysql();
    				$sql = "SELECT * FROM administrador WHERE email_adm = '$email' AND senha_adm = '$senha'";
    				$resultado_id = mysqli_query($conexao,$sql);
    				if ($resultado_id){
                        $dados_adm = mysqli_fetch_array($resultado_id);
    					if ( isset($dados_adm["cod_adm"]) ){
    						$_SESSION["cod_adm"] = $dados_adm["cod_adm"];
    						$_SESSION["email"] = $dados_adm["email_adm"];
    						header("location:login_correto.php");
    					}
              else{
                      echo "<script language='javascript'> alert('Os dados estão incorretos ou você não é administrador') </script>";
                  	}
          }
        }
    ?>
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

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="index.php">Bayern Store BR</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="roupas.php">Roupas</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="acessorios.php">Acessorios</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="brinquedos.php">Brinquedos</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="login.php">conectar</a>
                  </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead" style="background-image: url('img/w5.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>Bayern Store </h1>
                        <span class="subheading">conecte-se</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
      <form  method="post" action="">
      <div class="form-group">
          <center> <h2>Pagina do administrador</h2> </center>
          <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome">
          </div>
        <label for="exampleInputEmail1">Endereço de email</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Seu email">
        <small id="emailHelp" class="form-text text-muted"></small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Senha</label>
        <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha">
      </div>
      <br>
      <center><button type="submit" class="btn btn-primary">Enviar</button></center>
    </form>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item">
                            <a href="#">
                                <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                  </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted"> &copy;Desenvolvido Por Mariana Rodrigues</p>
                </div>
            </div>
        </div>
    </footer>
    <br><br><br><br><br>
