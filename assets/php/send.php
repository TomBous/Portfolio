<?php
$dsn = 'mysql:dbname=portfolio;host=127.0.0.1';
$user = 'root';
$password = '';
// On prépare l'enveloppe
try {
    $bdd = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    $req = $bdd->prepare('INSERT INTO messagerie(ladate, nom, email, msg) VALUES(CURDATE(), :nom, :email, :msg)');
    $req->execute(array(
        'nom' => $name,
        'email' => $email,
        'msg' => $msg
    ));
}

?>