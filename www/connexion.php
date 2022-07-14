<!-- espace ADMIN -->
<?php
/* permet d'échanger des informations sur toutes les pages 1/2 */
session_start();
/* lorsque l'utiliser cliquer sur le code, il exécute le code */
if(isset($_POST['valider'])){
    /* test */
    $pseudo_par_defaut = "admin";
    $mdp_par_defaut = "admin1234";
/* il stocke le pseudo saisi par l'utilisateur*/
    $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
    $mdp_saisi = htmlspecialchars($_POST['mdp']);

    /* vérifier si par défaut corresponde bien au saisi */
    if($pseudo_saisi == $pseudo_par_defaut AND $mdp_saisi == $mdp_par_defaut){
        /* vérifier si l'utilisateur est bien connecté */
        $_SESSION['mdp'] = $mdp_saisi;
        header('Location: index.php');
    }else{
        echo "votre mot de passe ou pseudo est incorrect..";
    }
    /* si ces deux champs ne sont pas vide on pourra exécuter notre code */
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){

    }else{
        echo "Vous avez oublié de compléter tous les champs..";
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
