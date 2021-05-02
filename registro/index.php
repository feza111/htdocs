<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> 
<body>
    <section>
        <form action="registro.php" method="post">
            <input name="nick" type="text" placeholder="Usuário">
            <input name="email" type="email" placeholder="E-mail">
            <input name="senha" type="password" placeholder="Senha">
            <input name="senha2" type="password" placeholder="Repetir Senha">
            <button>Registrar</button>
        </form>
        <?php
            if(isset($_SESSION['campos_branco'])): ?>
        <p><small><small> Usuario/email já cadastrados. </small></small></p>
        <?php
            endif;
            unset($_SESSION['campos_branco']);
        ?>
        <?php
            if(isset($_SESSION['senhas'])): ?>
        <p><small><small> Usuario/email já cadastrados. </small></small></p>
        <?php
            endif;
            unset($_SESSION['senhas']);
        ?>
    </section>
</body>
</html>