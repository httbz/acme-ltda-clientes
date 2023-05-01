<?php
require_once('connection.php');

if(isset($_POST['update'])){
    $id = $_GET['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $dataDeNasc = $_POST['dataDeNasc'];
    $habilitacao = $_POST['habilitacao'];
    $notificacao = $_POST['notificacao'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $endereco = $_POST['endereco'];
    $nDeRes = $_POST['nDeRes'];
    $complemento = $_POST['complemento'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];

    $query = "UPDATE clientes SET nome = '".$nome."', email = '".$email."', dataDeNasc = '".$dataDeNasc."', habilitacao = '".$habilitacao."', receberNot = '".$notificacao."', telefone = '".$telefone."', cpf = '".$cpf."', estado = '".$estado."', cidade = '".$cidade."', endereco = '".$endereco."', numeroDeRes = '".$nDeRes."', complemento = '".$complemento."', bairro = '".$bairro."', cep = '".$cep."' WHERE id = '".$id."'";

    $result = mysqli_query($con, $query);

    if($result){
        header("location:view.php");
    }
    else{
        echo 'Erro ao atualizar o registro';
    }
}

mysqli_close($con);
?>