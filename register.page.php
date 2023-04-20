<title>Painel de Alunos - Registrar</title>
<h2>Registro</h2>
<form method="post">
  Nome:
  <br>
  <input type="text" name="name">
  <br>

  E-mail:
  <br>
  <input type="email" name="email">
  <br>

  Senha:
  <br>
  <input type="password" name="password">
  <br>

  <input type="submit" name="register" value="Registrar">
  <br><br>

  Possui uma conta? Entre!
  <br>
  <input type="submit" name="login" value="Entrar">
</form>

<?php
  if (isset($_POST['login'])) {
    header('location: login.page.php');
  }

  if (isset($_POST['register'])) {
    require_once('user.service.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    register($name, $email, $password);
  }
?>
