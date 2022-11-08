<?php
include('conexao.php');

if (!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar">
        <div class="nav-left">
            <h3>La Honda</h3>
            <div class="nav-element">
                <a href="">Página Inicial</a>
            </div>
            <div class="nav-element">
                <a href="">Conheça a casa</a>
            </div>
            <div class="nav-element">
                <a href="">Contatos</a>
            </div>
        </div>
        <div class="nav-right">
            <div class="nav-element">
                <a href="logout.php">Sair</a>
            </div>
        </div>
    </nav>
    <h1>Bem vindo ao site <?php echo $_SESSION['funcao'] ?></h1>

</body>

</html>