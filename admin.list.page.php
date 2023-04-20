<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width initial-scale=10">.
<title>Painel de Alunos - Listar</title>
</head>
<body>
<header class="cabeçalho">
    <nav class="container1">
    <li class="cabeçalho__lista">
      <a class="cabeçalho__link" href="admin.dashboard.page.php">Início</a>
      <a class="cabeçalho__link" href="admin.create.page.php">Registrar</a>
      <a class="cabeçalho__link" href="admin.read.page.php">Consultar</a>
      <a class="cabeçalho__link" href="admin.update.page.php">Atualizar</a>
      <a class="cabeçalho__link" href="admin.delete.page.php">Deletar</a>
      <a class="cabeçalho__link" href="admin.list.page.php">Listar</a>
      <a class="cabeçalho__link" href="login.page.php">Sair</a>
    </nav>  
    </li>
  </header>
<h2>Todos os alunos registrados:</h2>
<?php
  require_once('student.service.php');
    
  listAll();
?>
