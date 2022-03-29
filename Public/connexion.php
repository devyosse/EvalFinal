<?php
require_once (__DIR__ . '/../includes.php');

if (isset($_POST['username']) && isset($_POST['pass']))
{
    $username = trim(addslashes(strip_tags($_POST['username'])));
    $pass = trim(addslashes(strip_tags($_POST['password'])));
}

?>

<form action="/View/articles.php" method="post">

    <label for="username-id">Votre pseudo</label>
    <p><input type="text" name="username" id="username-id"></p>

    <label for="pass-id">Votre Mot de passe</label>
    <p><input type="password" name="password" id="pass-id"></p>

    <p><input type="submit" value="connexion"></p>
</form>