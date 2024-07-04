<?php
 
    if(isset($_POST['submit']))
    {
        include 'config.php';

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $datanasc = $_POST['datanasc'];
        $endereco = $_POST['endereco'];
        $senha = $_POST['senha'];

      $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,estado,cidade,datanasc,endereco,senha)
       VALUES ('$nome','$email','$telefone','$estado','$cidade','$datanasc','$endereco',md5('$senha'))");

      header('Location: login.php');

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
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
      padding: 50px;
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
    .submit:hover{
      background-color: darkgreen;
      cursor:pointer;
    }
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div>
        <form action="cadastro.php" method="POST">
        <h1>Cadastre-se</h1>
        <input type="text" name="nome" placeholder="Nome">
        <br><br>
        <input type="text" name="email" placeholder="E-mail">
        <br><br>
        <input type="tel"  name="telefone" placeholder="Telefone">
        <br><br>
        <input type="text"  name="estado" placeholder="Estado">
        <br><br>
        <input type="text"  name="cidade" placeholder="Cidade">
        <br><br>
        <input type="date"  name="datanasc" placeholder="Data_Nascimento">
        <br><br>
        <input type="text"  name="endereco" placeholder="Endereço">
        <br><br>
        <input type="password" name="senha" placeholder="Senha">
        <br><br>
        <input class="submit" type="submit" name="submit" id="submit">
        </form>
     </div>
</body>
</html>