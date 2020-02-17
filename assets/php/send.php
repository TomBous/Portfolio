<?php
/*
$dsn = 'mysql:dbname=portfolio;host=localhost:3306';
$user = 'root';
$password = 'colorprinter2!';
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

$req = $bdd->prepare('INSERT INTO messagerie (ladate, nom, email, msg) VALUES(NOW(), :nom, :email, :msg)');
$req->execute(array(
'nom' => $name,
'email' => $email,
'msg' => $msg,
));
}
 */

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg']) && isset($_POST['objet'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = nl2br($_POST['msg']);
    $objet = $_POST['objet'];

    $to = 'tomasbousquet@gmail.com';
    $subject = $objet;
    $message = $name . ' : ' . $msg;
    $headers = 'From: Mon Site <contact@thomasbousquet.me>' . "\n" .
    'MIME-Version: 1.0' . "\n" .
    'Content-type: text/html; charset=utf-8' . "\n" .
    'Reply-To: ' . $email . "\n" .
    'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo "success";
    } else {
        echo "merde";
    }
    ;

}
