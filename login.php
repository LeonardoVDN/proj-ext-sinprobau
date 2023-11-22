<!doctype html>
<html lang="pt-br">
<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <style>
    html, body {
        height: 100%;
    }

    main {
        height: 100%;
    }

    .botao{
        background-color: #107050;
        text-transform: uppercase;
        border: 1px solid #107050;
        border-radius: 4px;
        color: #fff;
        text-align: center;
    }
  </style>
</head>
<body style="background-color: #02231C;">
  <?php
     if(!isset($_SESSION)) {
      session_start();
  }
    include('conexao.php');     
  
  ?>
  

  <?php
    if (isset($_POST["boto"]))
    {    
      $email = $_POST['login'];
      $senha = $_POST['senha'];
      
      $query = "SELECT email FROM cadastro WHERE email = '$email' AND senha = '$senha'";
      $result = mysqli_query($conn, $query);
      $row = mysqli_num_rows($result);
      if($row == 1) 
      {
        $_SESSION['usuario'] = $email;
        $_SESSION["loggedin"] = true;
        header('Location: add_news.php');
        exit();
      } 
    }      
    ?>
    <main style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
      <img class="base" src="imagem/logo1.png" style="height: 150px; width: 250px;">
      <div class="col-md-4 offset-md-4 text-center pt-5 " style="margin: 0;"> 
        <form method="post">
          <div class="mb-3 px-5 ">
            <label for="" class="form-label text-white w-25">Login</label>
            <input type="text" class="form-control encontre" name="login" id="login" placeholder="usuario@email.com" required>
          </div>
          <div class="mb-3 px-5 ">
            <label for="" class="form-label text-white w-25">Senha</label>
            <input type="password" class="form-control encontre" name="senha" id="senha"placeholder="******" required>
          </div>
          <?php
          if (isset($_POST["boto"])){
            if($row != 1){
          $_SESSION['nao_autenticado'] = true;
            echo "<div>
              <p class='text-danger'><strong>Falha no Login, Verifique se o login ou a senha estão corretos.</strong></p>
            </div>";
            }
          }
          ?>      
          <div class="col-md-4 offset-md-4 text-center">
            <input type="submit" value="Login" name="boto" id="boto" class="botao">
          </div>
        </form> 
          
      </div>
    </main>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
</body>

</html>