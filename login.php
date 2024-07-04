<?php

  include_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tela de Login</title>
  <style>
    body{
      font-family: Arial, Helvetica, sans-serif;
      background-color: palevioletred;
    }
    div{
      background-color: rgba(0, 0, 0, 1);
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 70px;
      border-radius: 15px;
      color: white;
    }
    input{
      padding: 15px;
      border: none;
      border-radius: 15px;
      outline: none;
    }
    .submit{
      background-color: green;
      border: none;
      padding: 15px;
      border-radius: 15px;
      width: 100%;
      color:white;
      font-size: 15px;

    }
    .submit:hover {
      background-color: darkgreen;
      cursor:pointer;
    }
  </style>
</head>
<body>
  <a href="home.php">Voltar</a>
  <div>
    <form action="testLogin.php" method="POST">
      <h1>Busca-Doula</h1>
      <input type="text" name="email"placeholder =" E-mail">
      <br><br>
      <input type="password" name="senha" placeholder=" Senha">
      <br><br>
      <input class="submit" type="submit" value="Enviar" id="submit">
    </form>
  </div>
</body>
</html>