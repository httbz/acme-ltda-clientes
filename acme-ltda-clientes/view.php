<?php
    require_once("connection.php");
    $query = "SELECT id, nome, cpf, cidade, dataDeNasc FROM clientes";
    $result = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <style>
                *{
    font-family: 'Roboto Condensed', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    display: flex;
    padding: 10px; 
    align-items: center;
    justify-content: center;
    background: linear-gradient(250deg, #e76f51, #f4a261);
}
button{
    padding:5px;
font-weight: 700;
font-size: large;
width: 250px;
height: 80px;
margin-bottom: 800px;
margin-left: 40px;
border: none;
border-radius: 5px;
background-color: #2a9d8f;
cursor: pointer;
text-transform: capitalize;
transition: .9s;
  
}
button:hover{
background-color: #185851;
transform: translateY(4px);
}
table {
    width:100%;
    table-layout:auto;
    font-family: 'Roboto Condensed', sans-serif;
    font-weight: 700;
    font-size: large;
    padding: 25px 30px;
    background-color: aliceblue;
    margin-top: -700px;
    border-collapse: collapse;
    border-radius:10px;
}
  tr {
    padding-bottom: 10px;
    padding-left: 15px;
    padding-right: 15px;
    
  }
  tr:nth-child(even){
background-color: rgb(192, 196, 200);
}
  td {
    padding: 5px 5px 15px 15px;
    text-align: center;
    
  }
    </style>
    <table>
        <tr>
            <td>#</td>
            <td>Nome</td>
            <td>CPF</td>
            <td>Cidade</td>
            <td>Idade</td>
            <td>Editar</td>
            <td>Excluir</td>
        </tr>
        <?php

            while($row=mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $nome = $row['nome'];
                $cpf = $row['cpf'];
                $cidade = $row['cidade'];
                $idade = $row['dataDeNasc'];
                
        ?>
        <tr>
            <td><?php echo $id ?></td>
            <td><?php echo $nome ?></td>
            <td><?php echo $cpf ?></td>
            <td><?php echo $cidade ?></td>
            <td><?php echo $idade ?></td>
            <td><a href="edit.php?GetID=<?php echo $id ?>">Editar</a></td>
            <td><a href="delete.php?Del=<?php echo $id ?>">Excluir</a></td>
        </tr>
        <?php

            }

        ?>
    </table>
    <a href="form.html"><button>Cadastrar novo cliente</button></a>
</body>
</html>