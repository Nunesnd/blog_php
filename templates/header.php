<?php 
    include_once("helpers/url.php");
    include_once("data/categories.php");
    include_once("data/posts.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brasil - Conhecimentos gerais</title>
    <!-- Estilo do projeto -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- Fonte do projeto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="<?= $BASE_URL ?>" id="logo">
            <img class="navegacao" src="<?= $BASE_URL ?>/img/brasao.svg" alt="heraldica">
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="<?= $BASE_URL ?>index.php" class="nav-link"> Home </a></li>
                <li><a href="#" class="nav-link"> Personagens </a></li>
                <li><a href="#" class="nav-link"> Fauna </a></li>
                <li><a href="#" class="nav-link"> Flora </a></li>
                <li><a href="<?= $BASE_URL ?>contato.php" class="nav-link"> Fale conosco </a></li>
            </ul>
        </nav>
    </header> 
