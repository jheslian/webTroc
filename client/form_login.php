<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/homepage.css" />
    <link rel="stylesheet" href="../css/authentification.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />

    <title>Se connecter</title>

</head>

<body>

    <?php
    require_once 'header.php';
    ?>

    <form action="login.php" method="POST" id="authentification">
        <div class="pseudo">
            <label>Pseudo :</label>
            <input type="text" id="pseudo" name="pseudo" />
        </div>
        <div class="mdp">
            <label>Mot de passe :</label>
            <input type="password" id="password" name="motDePasse" />
        </div>

        <input type="submit" id="submit" name="connexion" value="Se connecter"/>

        <a href="form_signUp.php">Créer un compte</a>
    </form>
    </div>

    <!--Valider l'existence du compte-->
    <!--Si le compte n'existe pas, donc renvoie sur se créer un compte-->
    <!--Se créer un compte-->
    <!--Mot de passe oublié-->


</body>

</html>