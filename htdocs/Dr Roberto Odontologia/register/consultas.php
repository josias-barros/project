<?php
include_once ("conexao.php");

mysqli_close($conexao);

?>

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

                        <h2 class="form-title">Log in</h2>
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