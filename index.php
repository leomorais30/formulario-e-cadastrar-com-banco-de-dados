<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>CRUD - Cadastrar</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
        <h1>CADASTRAR USUÁRIO</h1>
        <div id="corpo-form" class=corpo>
        <?php
        if(isset($_SESSION['msg'])){ 
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        
        <form method="POST" action="processa.php">
            <label>Nome: </label>
            <input type="text" name="nome" placeholder="Digite o nome completo"><br><br>
            
            <label>E-mail: </label>
            <input type="email" name="email" placeholder="Digite o seu e-mail:"><br><br>

            <label>Sugestão: </label>
            <input type="text" name="opiniao" placeholder="Digite sua opinião:"><br><br>

            <input type="submit" value="Cadastrar">
    </form>
    </div>    
</body>
</html>
