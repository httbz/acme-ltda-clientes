<?php

    require_once("connection.php");
    $id = $_GET['GetID'];
    $query = "SELECT * FROM clientes WHERE id= '".$id."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $nome = $row['nome'];
        $cpf = $row['cpf'];
        $cidade = $row['cidade'];
        $idade = $row['dataDeNasc'];
        $email = ['email'];
        $habilitacao = ['habilitacao'];
        $receberNot = ['receberNot'];
        $telefone = ['telefone'];
        $estado = ['estado'];
        $endereco = ['endereco'];
        $numeroDeRes = ['numeroDeRes'];
        $complemento = ['complemento'];
        $bairro = ['bairro'];
        $cep = ['cep'];
        
    }

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
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

form{
    padding: 25px 30px;
    background-color: aliceblue;
    border-radius: 15px;
}
form h1{
    text-align: center;
    padding-bottom: 15px;
}
form label{
    display: flex;
}
input[type="text"]{
    width: 250px;
    height: 100%;
    padding: 8px;
    border-radius: 5px;
}
input[type="submit"]{
    font-weight: 700;
    font-size: large;
    width: 250px;
    height: 80px;
    margin-top: 20px;
    border: none;
    border-radius: 5px;
    background-color: #2a9d8f;
    cursor: pointer;
    text-transform: capitalize;
    transition: .9s;
}
input[type="submit"]:hover{
  background-color: #185851;
  transform: translateY(4px);
}
#btCad{
  font-weight: 700;
  font-size: large;
  width: 250px;
  height: 80px;
  margin-top: 20px;
  margin-left: 200px;
  border: none;
  border-radius: 5px;
  background-color: #2a9d8f;
  cursor: pointer;
  text-transform: capitalize;
  transition: .9s;
  margin-top: 90px;
}
#btCad:hover{
background-color: #185851;
transform: translateY(4px);
}
input[type="date"]{
    width: 250px;
    height: 35px;
}

.firstcolumn {
    float: left;
    width: 5%;
    padding: 5px;
    margin-left: 200px;
    margin-right: 100px;
  }
  .column {
    margin-left: 400px;
    margin-top: -340px;
  }
  .ende{
    margin-top: 250px;
  }
  .endeSec{
    margin-left: 400px;
    margin-top: -300px;
  }

#btCanc{
font-weight: 700;
font-size: large;
width: 100px;
height: 40px;
margin-bottom: 800px;
margin-left: 20px;
border: none;
border-radius: 5px;
background-color: #2a9d8f;
cursor: pointer;
text-transform: capitalize;
transition: .9s;
  
}
#btCanc:hover{
background-color: #185851;
transform: translateY(4px);
}


    </style>
    
    <form action="process-form.php" method="post" name="formClie" id="formCli">
        <h1>Edição de Cliente</h1>
        <div class="row" id="row">
        <div class="firstColumn" id="firstColumn">
            <label for="nome">Nome Completo:</label>
            <input type="text" id="nome" name="nome"><br><br>

            <label for="email">E-mail:</label>
            <input type="text" id="email" name="email"><br><br>

            <label for="dataDeNasc">Data de Nascimento:</label>
            <input type="date" id="dataDeNasc" name="dataDeNasc"><br><br>

            <label for="habilitacao">Possui Habilitação?</label>
            <input type="checkbox" id="habilitacao" name="habilitacao"><br><br>

            <label for="notificacao">Deseja receber notificação?</label>
            <input type="checkbox" id="notificacao" name="notificacao"><br><br>
        </div>
        <div class="column" id="column">
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone"><br><br>

            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf"><br><br>

        </div>

        <div class="ende" id="ende">
        <label for="estado">Estado:</label>
        <input type="text" id="estado" name="estado"><br><br>

        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade" name="cidade"><br><br>

        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco"><br><br>

        <label for="nDeRes">Número:</label>
        <input type="text" id="nDeRes" name="nDeRes"><br><br>

        <div class="endeSec" id="endeSec">
        <label for="complemento">Complemento:</label>
        <input type="text" id="complemento" name="complemento"><br><br>

        <label for="bairro">Bairro:</label>
        <input type="text" id="bairro" name="bairro"><br><br>

        <label for="cep">CEP:</label>
        <input type="text" id="cep" name="cep"><br><br>
    </div>
    </div>

        <br>

        <button name="update" id="btCad">Editar</button>
        
    </div>
    </form>
    <a href="view.php"><button id="btCanc">Cancelar</button></a>
</body>
</html>