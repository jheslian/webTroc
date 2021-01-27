<?php
session_start();

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'trocdetrucs');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if (isset($_POST['connexion'])) {
    if (empty($_POST['pseudo'])) {
        $errors['pseudo'] = 'Veuillez entrer votre pseudo';
    }
    if (empty($_POST['password'])) {
        $errors['password'] = 'Veuillez entrer le mot de passe';
    }
    $username = $_POST['pseudo'];
    $password = $_POST['password'];

    if (count($errors) === 0) {
        $query = "SELECT userName FROM clients WHERE userName=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ss', $username, $password);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) { // if password matches
                $stmt->close();

                $_SESSION['idClient'] = $user['idClient'];
                $_SESSION['userName'] = $user['userName'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['message'] = 'Vous êtes connecté !';
                $_SESSION['type'] = 'alert-success';
                header('location: index.php');
                exit(0);
            } else { // if password does not match
                $errors['login_fail'] = "Les informations sont incorrectes";
            }
        } else {
            $_SESSION['message'] = "Erreur de base de données";
            $_SESSION['type'] = "alert-danger";
        }
    }
}