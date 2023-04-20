<?php
  function register($id, $name, $email, $class, $sex) {
    require_once('sql.connect.php');

    if (empty($id) || empty($name) || empty($email) || empty($class) || empty($sex)) {
      echo "<script>alert('Preencha todos os campos.');</script>";
      return;
    }

    $result = mysqli_query($connection, "SELECT * FROM students WHERE id = '$id'");
    $row_count = mysqli_num_rows($result);

    if ($row_count > 0) {
      echo "<script>alert(\"Este e-mail já está cadastrado.\")</script>";
      return;
    }

    if (mysqli_query($connection, "INSERT INTO students (id, name, email, class, sex) VALUES ('$id', '$name', '$email', '$class', '$sex')")) {
      echo "<script>alert(\"Aluno registrado com sucesso.\")</script>";
    }
  }

  function search($id) {
    require_once('sql.connect.php');

    if (empty($id)) {
      echo "<script>alert('Preencha todos os campos.');</script>";
      return;
    }

    $result = mysqli_query($connection, "SELECT * FROM students WHERE (id = '$id' OR email = '$id' OR name LIKE '%$id%')");
    $row_count = mysqli_num_rows($result);

    if ($row_count <= 0) {
      echo "<script>alert(\"Nenhum usuário encontrado.\")</script>";
      return;
    }

    while($raw = $result->fetch_array()) {
      echo "<br>ID: " . $raw['id'];
      echo "<br>Nome: " . $raw['name'];
      echo "<br>E-mail: " . $raw['email'];
      echo "<br>Classe: " . $raw['class'];
      echo "<br>Sexo: " . $raw['sex'];
    }
  }

  function update($id) {
    require_once('sql.connect.php');

    if (empty($id)) {
      echo "<script>alert('Preencha todos os campos.');</script>";
      return;
    }

    $result = mysqli_query($connection, "SELECT * FROM students WHERE id = '$id'");
    $row_count = mysqli_num_rows($result);

    if ($row_count <= 0) {
      echo "<script>alert(\"Nenhum usuário encontrado.\")</script>";
      return;
    }

    while($raw = $result->fetch_array()) {
      echo "<br>ID: <input type=\"text\" value=\"" . $raw['id'] . "\" readonly>";
      echo "<br>Nome: <input type=\"text\" value=\"" . $raw['name'] . "\" minlength=\"3\" maxlength=\"64\">";
      echo "<br>E-mail: <input type=\"text\" value=\"" . $raw['email'] . "\" minlength=\"6\" maxlength=\"64\">";
      echo "<br>Classe: <input type=\"text\" value=\"" . $raw['class'] . "\" minlength=\"5\" maxlength=\"5\">";
      echo "<br>Sexo: <input type=\"text\" value=\"" . $raw['sex'] . "\" minlength=\"1\" maxlength=\"1\">";

      echo "<br><input type=\"submit\" name=\"modify\" value=\"Modificar\">";
    }
  }

  function realUpdate($id) {
    
  }

  function delete($id) {
    require_once('sql.connect.php');

    if (empty($id)) {
      echo "<script>alert('Preencha todos os campos.');</script>";
      return;
    }

    $result = mysqli_query($connection, "SELECT * FROM students WHERE id = '$id'");
    $row_count = mysqli_num_rows($result);

    if ($row_count <= 0) {
      echo "<script>alert(\"Nenhum usuário encontrado com esse ID.\")</script>";
      return;
    }

    if (mysqli_query($connection, "DELETE FROM students WHERE id = '$id'")) {
      echo "<script>alert(\"Aluno deletado com sucesso.\")</script>";
    }
  }

  function listAll() {
    require_once('sql.connect.php');

    $result = mysqli_query($connection, "SELECT * FROM students");
    $row_count = mysqli_num_rows($result);

    if ($row_count <= 0) {
      echo "<p style=\"font-color: red;\">Não há nenhum aluno registrado.</p>";
      echo "<script>alert(\"Nenhum usuário encontrado.\")</script>";
      return;
    }

      echo "_______________________________________________________________________<br>";
    while($raw = $result->fetch_array()) {
      echo "<br>ID: " . $raw['id'];
      echo "<br>Nome: " . $raw['name'];
      echo "<br>E-mail: " . $raw['email'];
      echo "<br>Classe: " . $raw['class'];
      echo "<br>Sexo: " . $raw['sex'];
      echo "<br>_______________________________________________________________________<br>";
    }
  }
?>
