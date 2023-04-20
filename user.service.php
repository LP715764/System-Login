<?php
  function login($email, $pass) {
    require_once('sql.connect.php');

    if (empty($email) || empty($pass)) {
      echo "<script>alert('Preencha todos os campos.')</script>";
      return;
    }
    
    $result = mysqli_query($connection, "SELECT * FROM users WHERE email = '$email'");
    $row_count = mysqli_num_rows($result);

    if ($row_count <= 0) {
      echo "<script>alert('E-mail ou senha inválidos.')</script>";
      return;
    }

    $role = "user";

    while($raw = $result->fetch_array()) {
      if (!password_verify($pass, $raw['password'])) {
        echo "<script>alert('E-mail ou senha inválidos.')</script>";
        return;
      }

      $role = $raw['role'];
    }

    header('location: ' . $role . '.dashboard.page.php');
  }

  function register($name, $email, $pass) {
    require_once('sql.connect.php');

    if (empty($name) || empty($email) || empty($pass)) {
      echo "<script>alert('Preencha todos os campos.')</script>";
      return;
    }
    
    $hash = password_hash($pass, PASSWORD_BCRYPT);
    
    $result = mysqli_query($connection, "SELECT * FROM users WHERE email = '$email'");
    $row_count = mysqli_num_rows($result);

    if ($row_count > 0) {
      echo "<script>alert(\"Este e-mail já está cadastrado.\")</script>";
      return;
    }

    if (mysqli_query($connection, "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hash')")) {
      echo "<script>alert(\"Registrado com sucesso.\")</script>";
    }
  }
?>
