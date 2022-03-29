<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/View/style.css">
    <title>Blog<?php if (isset($_GET['id'])) echo '_Article ' .$_GET['id'] ?></title>
</head>

<div class="">
    <header class="">
        <div>
            <h3 class="">Mon blog</h3>
            <nav class="">
                <a class=""  href="/index.php">Home</a>
                <a class="" href="/Public/article.php">Articles</a>
                <a class="" href="/Public/connexion.php">Connexion</a>
                <a class="" href="/Public/inscription.php">Inscription</a>
                <a href="/Admin/home.php">AdminPage</a>
            </nav>
        </div>
    </header>


<?php

?>