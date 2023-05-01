<?php
date_default_timezone_set("America/Sao_Paulo");
        require_once("connection.php");
    if(isset($_POST['submit'])){
        if(empty($_POST['nome']) || empty($_POST['cpf']) || empty($_POST['telefone']) || empty($_POST['dataDeNasc']) || empty($_POST['cep'])){

            echo 'Por favor, preencha todos os campos';
        }else{
            $dataAtual = time();
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $dataDeNasc = strtotime($_POST['dataDeNasc']);
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
            $idade = ($dataAtual - $dataDeNasc) / (365 * 24 * 60 * 60);

            //checa se as variáveis booleanas são falsas ou verdadeiras, se não forem checadas no formulário, será atribuído o valor de "0"/"false"
            if (isset($_POST['habilitacao'])) {
                $habilitacao = filter_var($_POST['habilitacao'], FILTER_VALIDATE_BOOLEAN);
            } else {
                $habilitacao = false;
            }
            
            if (isset($_POST['notificacao'])) {
                $notificacao = filter_var($_POST['notificacao'], FILTER_VALIDATE_BOOLEAN);
            } else {
                $notificacao = false;
            }

            $query = "INSERT INTO clientes (nome, email, dataDeNasc, habilitacao, receberNot, telefone, cpf, estado, cidade, endereco, numeroDeRes, complemento, bairro, cep) VALUES('$nome','$email','$idade','$habilitacao','$notificacao','$telefone','$cpf','$estado','$cidade','$endereco','$nDeRes','$complemento','$bairro','$cep')";
            $result = mysqli_query($con, $query);

            if($result){
                header("location:view.php");
                
            }else{
                echo 'Erro' . mysqli_error($con);
            }
        }
    }else{
        header('location:form.html');
    }

?>