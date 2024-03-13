<?php
    // Inclusão do arquivo que define a base da URL
    include_once("helpers/url.php");

    // Inclusão dos arquivos de dados para categorias e posts
    include_once("data/categories.php");
    include_once("data/posts.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zenith Code</title>
    
    <!-- Estilização do projeto -->
    <link rel="stylesheet" href="<?= $base_url ?>css/style.css">
    
    <!-- Fonte do projeto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <!-- Tag para o logo do site com link para a página inicial -->
        <a href="<?= $base_url ?>index.php" id="logo">
            <img src="<?= $base_url ?>img/logo.svg" alt="Blog codar">
        </a>
        <nav>
            <!-- Lista de navegação -->
            <ul id="navbar">
                <!-- Links de navegação -->
                <li><a href="<?= $base_url ?>index.php" class="nav-link">HOME</a></li>
                <li><a href="#" class="nav-link">Categorias</a></li>
                <li><a href="#" class="nav-link">Sobre</a></li>
                <li><a href="<?= $base_url ?>contato.php" class="nav-link">Contato</a></li>
            </ul>
        </nav>
    </header>