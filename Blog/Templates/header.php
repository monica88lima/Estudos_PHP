<?php
   include_once("helpers/url.php");
   include_once("data/posts.php");
   include_once("data/categoria.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Mônica Codando</title>
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/style.css">
    <link rel="icon" href="<?= $BASE_URL ?>/img/fav.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
    
</head>
<body>
    <header>
        <a href="<?= $BASE_URL ?>" id="logo">
           <img src="<?= $BASE_URL ?>/img/logo.png" alt = "blog Monica Codando">
        </a>
        <nav>
            <ul id = "navbar">
                <li><a href="<?= $BASE_URL ?>"class ="nav-link">Home</a></li>
                <li><a href="<?= $BASE_URL ?>"class ="nav-link">Categorias</a></li>
                <li><a href="<?= $BASE_URL ?>"class ="nav-link">Sobre</a></li>
                <li><a href="<?= $BASE_URL ?>contato.php"class ="nav-link">Contatos</a></li>
            </ul>
        </nav>
    </header>

    