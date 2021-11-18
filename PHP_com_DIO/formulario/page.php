<!DOCTYPE html>
<?php
    session_start();
?>

<html>
    <head>
        <title>Validações em PHP</title>
        <meta name="author" content="Blucilha" >
        <meta name="description" content="Pequeno exercício com PHP" >
        <meta http-equiv="content-type" content="text/html; charset=utf-8" >
    </head>
    <body>
        <?php
            if (isset($_SESSION['messagem_error'])) {

                echo $_SESSION['messagem_error']."<hr/>";
            }
            if (isset($_SESSION['messagem_sucesso'])) {

                echo $_SESSION['messagem_sucesso']."<hr/>";
            }
        ?>
        <form action="principal.php" method="POST">
            <label for="nome">
                Nome: 
                <input type="text" placeholder="Digite o seu nome" id="nome" name="nome">
            </label>
            <label for="idade">
                Idade: 
                <input type="text" placeholder="Digite a sua idade" id="idade" name="idade"> 
            </label>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>