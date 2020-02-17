<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Black+Ops+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
<?php
spl_autoload_register('thomas_autoload');
function thomas_autoload($class_name)
{
    require '../assets/php/classes/' . $class_name . '.class.php';
}
require '../assets/php/includes/functions.inc.php';

?>
    <div class="container">
    <h1>Ajouter un projet</h1>
          <form method="POST" onsubmit="submitProject(); return false;" class="contact-form" id="project-form" enctype="multipart/form-data">
            <div class="form-block">
                <div class="input-block">
                    <input type="text" placeholder="Titre" class="form-control">
                </div>
                <textarea name="textarea" rows="5" cols="30" placeholder="Description"></textarea>
                <div class="special-input">
                  <span>Date du Projet :</span>
                  <input type="date" placeholder="" class="form-control">
              </div>
              <div class="special-input">
                  <span>Client :</span>
                <select name="client">
                <?php
$clients = getClients();
foreach ($clients as $client) {
    echo ('<option value="' . $client['id'] . '">' . $client['nom'] . '</option>');
}
?>
                </select>
             </div>
             <div class="special-input">
                <label for="miniature">Miniature du projet :</label>
                <input type="file" id="miniature" name="miniature" accept="image/png, image/jpeg">
            </div>
            <div class="special-input">
                <label for="zip-projet">Zip du projet :</label>
                <input type="file" id="zip-projet" name="zip-projet" accept=".zip">
            </div>

            </div>
            <div class="">
                  <button type="submit" class="square-button">Envoyer</button>
            </div>
          </form>
    </div>
    <div class="container-client">
    <h1>Ajouter un client</h1>
          <form method="POST" onsubmit="submitClient(); return false;" class="contact-form" id="client-form">
            <div class="flex row">
                <div class="input-block">
                    <input type="text" placeholder="Prénom (facultatif)" class="form-control">
                </div>
                <div class="input-block">
                    <input type="text" placeholder="Nom*" class="form-control">
                </div>
                <div class="input-block">
                    <input type="text" placeholder="Email*" class="form-control">
                </div>
                <div class="client-button">
                  <button type="submit" class="square-button">Envoyer</button>
                </div>
                </div>
          </form>
    </div>
    <script type="text/javascript" src="../assets/js/admin.js" async defer></script>
</body>
</html>
