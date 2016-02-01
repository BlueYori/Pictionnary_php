<?php
/**
 * Created by PhpStorm.
 * User: Stephanie
 * Date: 14/01/2016
 * Time: 10:47
 */
$email      = stripslashes($_POST['email']);
$password   = stripslashes($_POST['password']);

try {
    $dbh = new PDO('mysql:host=localhost;dbname=pictionnary', 'test', 'test');
    $sql = $dbh->query("SELECT * FROM USERS WHERE email = '" . $email . "' AND password = '" . $password . "'");

    if ($sql->rowCount() == 0) {
        header('Location: main.php?erreur=' . htmlentities("Votre email ou votre mot de passe est incorrecte !"));
    } else {
        session_start();
        $_SESSION['user'] = $sql->fetchAll(PDO::FETCH_ASSOC)[0];
        header("Location: main.php");
        $dbh = null;
    }
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    $dbh = null;
    die();
}