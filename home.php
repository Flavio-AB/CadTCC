<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca-Doula</title>
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
            padding: 20px;
            border-radius: 15px;
            color: white;
            }
        input{
            padding: 15px;
            border: none;
            border-radius: 15px;
            outline: none;
            }
        button{
            background-color: green;
            border: none;
            padding: 15px;
            border-radius: 15px;
            width: 100%;
            color:white;
            font-size: 15px;
            }
        button:hover{
            background-color: darkgreen;
            cursor:pointer;
            }
    </style>
</head>
<body>
<div>
    <h1>Busca-Doula</h1>
    <form action="login.php" method="POST">
      <button>Entrar</button>
    </form>
    <br>
    <form action="cadastro.php" method="POST">
      <button>Cadastrar</button>
    </form>
  </div>
</body>
</html>