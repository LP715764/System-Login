<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Painel de Alunos - Entrar</title>
<meta charset="utf-8">
<style>
  *{
    margin: 0;
    padding: 0;
    border-style: border-box;
  }
  
    body{
      background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(8,25,131,1) 40%, rgba(7,53,150,1) 49%, rgba(7,59,154,1) 51%, rgba(10,57,66,1) 96%);
    } 
    .container{
      display: flex;
      justify-content: center;
    }	
		#tela{
        background-color: #FFF;
				padding: 50px;
				width: 400px;
				height: 300px;
				position: absolute;
				top: 100px;
				margin-left:500px;
				border-radius: 20px;
				box-shadow: 0px 0px 80px #eb5874;
				
            }				
	</style>
</head>
<style media="screen">
    label{
        display:block;
    }
</style>  
<body>
    <div id="tela">
<h2>Login</h2>
          <form method="post">
                E-mail:
                <br>
                <input type="email" name="email">
                <br>

                Senha:
                <br>
                <input type="password" name="password">
                <br>

                <input type="submit" name="login" value="Entrar">
                <br><br>

                Não possui uma conta? Registre-se!
                <br>
                <input type="submit" name="register" value="Registrar">
        </form>
    </div>
</body>

<?php
  if (isset($_POST['register'])) {
    header('location: register.page.php');
  }

  if (isset($_POST['login'])) {
    require('user.service.php');

    $email = $_POST['email'];
    $password = $_POST['password'];

    login($email, $password);
  }
?>
