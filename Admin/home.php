<?php
require_once (__DIR__ . '/../includes.php');

if ((is_user()) == 3){
    echo "Désolé cette page n'est pas autorisé";
}else{
     header('Location: /Public/connexion.php');
}
?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AdminPage</title>
</head>
<body>
    <?php if ((is_admin())){
        header('Location: /Public/connexion.php');
    }else{
        //header('Location: /View/articles.php');
    }?>
        <h1>Bienvenue sur ton espace admin</h1>

<?php require_once (__DIR__ . '../Public/article.php'); ?>
</body>
</html>
