<?php
/* lorsque l'utiliser cliquer sur le code, il exécute le code */
if(isset($_POST['valider'])){
    /* si ces deux champs ne sont pas vide on pourra exécuter notre code */
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){

    }else{
        echo "T'as oublié de compléter tous les champs..";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
        <title> Espace de connexion admin</title>
        <meta charset="utf-8">
</head>
<!-- envoyer des données au serveur -->
   <form method="POST" action="" align="center">
    <input type="text" name="pseudo" autocomplete="off">
    <br>
    <input type="password" name="mdp">
    <br><br>
    <input type="submit" name="valider">
   </form>

</html>
