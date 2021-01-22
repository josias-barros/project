<?php

include_once("conexao.php");
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST ['senha'];
$resenha = $_POST ['resenha'];

$sql = "insert into usuarios (nome,email,senha,resenha) values ('$nome','$email',md5('$senha'),'$resenha')";
$salvar =  mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    
                    <form method="POST" id="signup-form" class="signup-form">

                        <h2 class="form-title">Confirmação de Cadastro</h2>
                        <hr><br><br>

                        <?php
                       
                        if ($linhas == 1){
                        	print "Cadastro efetuado com sucesso!";	
                        	}else{
                        		print "Cadastro não efetuado. <br> Já existe um usuário com este e-mail!";
                        	}
                        	?>
                        
</body>
</html>