<?php
session_start();

include '../inc/accessBDD.php';

$errors = [];

if (isset($_POST['connexion'])) {
    if (empty($_POST['pseudo'])) {
        $errors['pseudo'] = 'Veuillez entrer votre pseudo';
    }
    if (empty($_POST['password'])) {
        $errors['password'] = 'Veuillez entrer le mot de passe';
    }
    $username = $_POST['pseudo'];
    $password = $_POST['motDePasse'];




    if (count($errors) === 0) {
        $query = "SELECT userName, motDePasse FROM Clients WHERE userName = '".$username."'";

        $resultat = mysqli_query($dbh,$query);

        foreach ($resultat as $elt){

            if($elt['userName'] == $username && password_verify($password, $elt['motDePasse'])){
                require_once './indexClient.php';
                echo 'Vous êtes connecté.' ;

            } else {
                echo "ça marche poooooo";
            }     
        }

        $dbh = null;
    }
}
