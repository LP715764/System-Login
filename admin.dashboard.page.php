<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width initial-scale=1.0">
  <title>Painel de Alunos - Início</title>
 <head>

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
        background-color: #FFFFFF;
        padding: 50px;
        width: 400px;
        height: 300px;
        position: absolute;
        top: 100px;
        border-radius: 20px;
        box-shadow: 0px 0px 20px #000;        
            } 
        .cabeçalho {
          display: flex;
          justify-content: center;
          align-items: center;
          text-align: center;
          background-color: #070A52;
          height: 40px;
          width: 100%;  
          text-align: center;
          list-style: none;
          padding: 1em 0;
        }
        .cabeçalho__link {
          text-decoration: none;
          color: #000;
          font-size: 24px;
          margin-left: 50px;
          color: #FFF;
        }
        .cabeçalho__lista {
          display: flex;
          justify-content: space-between;
        }
        .container1 {
          display: flex;
          justify-content: flex;
          text-align: center;
          margin-left: 20px;
          margin-top: 10px;
        }
        .container2 {
          display: flex;
          justify-content: center;
          text-align: center;
        }

        .formulario input{
          margin: 10px 0;
        
        }
        #botao {
          padding: 5px;
        }
        </style>


<br>

Você é um usuário administrador.
