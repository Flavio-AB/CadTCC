<?php
    session_start();
    include_once('config.php');
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset ($_SESSION['email']);
        unset ($_SESSION['senha']);
        header('Location: login.php');
    }
    //print_r($result);
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM usuarios WHERE nome LIKE '%$data%' or email LIKE '%$data%' or cidade LIKE '%$data%' or estado LIKE '$data' ORDER BY nome DESC";
    }
    else
    {
        $sql = "SELECT * FROM usuarios ORDER BY idusuarios ASC";
    }
    $result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca-Doulas</title>
    <style>
        body{
        font-family: Arial, Helvetica, sans-serif;
        background-color: palevioletred;
        }
        div{
        background: white;
        border-radius: 10px;
        position: absolute;
        left: 30%;
        top: 40%;
        }
        .box-search{
        display: flex;
        justify-content: center;
        gap: .1%;
        top: 20%;
        left: 42%;
        }
        input{
        border: none;
        
        border-radius: 10px;
        }
        button{
        background-color: green;
        border: none;
        padding: 10px;
        border-radius: none;
        width: 50%;
        color:white;
        font-size: 10px;
        border-radius: 10px;
        }
        button:hover{
        background-color: darkgreen;
        cursor: pointer;
        }
       
    </style>
</head>
<body>
   <div class="box-search">
        <input  class="form-control w-35 " placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" name="btn-pesquisar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
        </svg>
        </button>
   </div>
    <a href="sair.php">Sair</a>
   <div>
        <table>
            <thead>
                <tr>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col">Data de Nascimento</th>                               
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                    echo "<tr>";
                    echo "<td>".$user_data['nome']."</td>";
                    echo "<td>".$user_data['email']."</td>";
                    echo "<td>".$user_data['telefone']."</td>";
                    echo "<td>".$user_data['cidade']."</td>";
                    echo "<td>".$user_data['estado']."</td>";
                    echo "<td>".$user_data['datanasc']."</td>";
                    echo "</tr>";
                    }
                ?>  
            </tbody>
        </table>
   </div>
</body>
<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event){
        if(event.key == "Enter")
        {
            searchData();
        }
    });

    function searchData()
    {
        window.location = 'BuscaD.php?search='+search.value;
    }
</script>
</html>