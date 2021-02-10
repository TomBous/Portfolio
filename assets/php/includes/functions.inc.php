<?php

function getProjets()
{
    try
    {
        $bdd = new Db;
        $connection = $bdd->connect();
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $requete = $connection->prepare('SELECT * FROM clients RIGHT JOIN projets ON clients.id = projets.id_client;');
    $requete->execute();
    $projets = $requete->fetchAll();
    return $projets;
}
function unzipProjet($file_relative_path, $newDirName, $clientZipName)
            {

            // get the absolute path to $file
                $path = realpath($file_relative_path);
                $zip = new ZipArchive;
                $res = $zip->open($path);
                if ($res === true) {
                    // extract it to the path we determined above
                    $zip->extractTo('/home/both7479/public_html/sites/');
                    $zip->close();
                    rename('/home/both7479/public_html/sites/'.$clientZipName, '/home/both7479/public_html/sites/'.$newDirName);
                    echo "WOOT! projet extrait dans le dossier sites";
                } else {
                    echo "Doh! Erreur dans l'extraction du projet";
                }
            }
            

function addProjet()
{
    $path_miniature = '';
    if (isset($_FILES['miniature']) && $_FILES['miniature']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['miniature']['tmp_name'];
        $fileName = $_FILES['miniature']['name'];
        $newFileName = preg_replace('/[^a-z0-9\.-]/', '', strtolower($fileName));
        // directory in which the uploaded file will be moved
            $uploadFileDir = '/home/both7479/public_html/assets/img/';
            $dest_path = $uploadFileDir . $newFileName;
            global $path_miniature;
            $path_miniature = './assets/img/'.$newFileName;
            if(move_uploaded_file($fileTmpPath, $dest_path))
            {
            $message ='File is successfully uploaded.';
            }
            else
            {
            $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
            }
            echo $message;
        }
    $dirUrl = '';
    $newFilePath = '';
    if (isset($_FILES['zip']) && $_FILES['zip']['error'] === UPLOAD_ERR_OK) {
        global $dirUrl,$newFilePath;
        $fileTmpPath = $_FILES['zip']['tmp_name'];
        $zipName = $_FILES['zip']['name'];
        $computerFolderName = explode('.',$zipName);
        $newFileName = preg_replace('/[^a-z0-9\.-]/', '', strtolower($zipName));
        $newDirName = explode('.',$newFileName);
        $dirUrl = 'https://www.thomasbousquet.me/sites/'.$newDirName[0].'/';
        // directory in which the uploaded file will be moved
        $uploadFileDir = '../sites/';
        if(move_uploaded_file($fileTmpPath,$uploadFileDir.$newFileName))
        {
        $message ='ZIP file is successfully uploaded.';
        $newFilePath = $uploadFileDir.$newFileName;
        }
        else
        {
        $message = 'There was some error moving the ZIP file to upload directory. Please make sure the upload directory is writable by web server.';
        }
        echo $message.'at :'.$newFilePath;
        unzipProjet($newFilePath, $newDirName[0],$computerFolderName[0]);
        }
    try
    {
        $bdd = new Db;
        $connection = $bdd->connect();
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $requete = $connection->prepare('INSERT INTO `projets` (`titre`, `description`, `date`, `id_client`, `img`, `link`) VALUES
    (:titre,:description,:date,:id_client,:img,:link)');
    $requete->execute([
        ':titre' => $_POST['titre'],
        ':description' => $_POST['description'],
        ':date' => $_POST['date'],
        ':id_client' => $_POST['id_client'],
        ':img' => $path_miniature,
        ':link' => $dirUrl
    ]);
    return 'ok';
}
function getClients()
{
    try
    {
        $bdd = new Db;
        $connection = $bdd->connect();
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $requete = $connection->prepare('SELECT * FROM clients;');
    $requete->execute();
    $clients = $requete->fetchAll();
    return $clients;
}



function addClient() {
    try {
        $bdd = new Db;
        $connection = $bdd->connect();
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $requete = $connection->prepare('INSERT INTO `clients` (`nom`, `prenom`, `email`) VALUES
    (:nom,:prenom,:email)');
    $requete->execute([
        ':nom' => $_POST['nom'],
        ':prenom' => $_POST['prenom'],
        ':email' => $_POST['email']
    ]);
    return 'ok';
}

if (!empty($_POST['nom']) && !empty($_POST['email'])) {

    if (addClient() === 'ok') {
        echo "|||||SUCCESS|||||";
    } else {
        echo "merde";
    }
}

if (!empty($_POST['titre']) && !empty($_POST['id_client']) && !empty($_POST['date'])) {

    if (addProjet() === 'ok') {
        echo "|||||SUCCESS|||||";
    } else {
        echo "merde";
    }
}