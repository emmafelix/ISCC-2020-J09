
<?php

if ($_FILES['userfile']['name']) {
    
    if (strlen(explode('.', $_FILES['userfile']['name'])[0]) < 5) {
        echo "Le nom du fichier doit faire plus de 4 caractères hors extension. ";
        
    }
    else {
        $extention = explode('.', $_FILES['userfile']['name'])[1];
        $extention_possible = array("jpg", "jpeg", "png", "JPG", "JPEG", "PNG");
        
        if (in_array($extention, $extention_possible)) {
            echo "<p><strong>Nom du fichier:</strong>" . $_FILES['userfile']['name'] . ".</p>";
            echo "<p><strong>Type du fichier:</strong>" . $_FILES['userfile']['type'] . ".</p>";
            echo "<p><strong>Taille du fichier:</strong>" . $_FILES['userfile']['size'] . ".</p>";
            $_SESSION['description'] = $_POST['description'];
            $_SESSION['titre'] = $_POST['titre'];
        } else {
            echo "Le fichier ne correspond pas aux attentes.";
        }
    }
}

$dossier='/fichier/';
foreach($_FILES as $fichier){
    $dossier=$_SERVER['DOCUMENT_ROOT']. 'h]tml/upload/fichiers/';
    $fitch=$fichier['name'];

    if(move_uploaded_file(($fichier['tmp_name']),$dossier.$fitch))
    {
        echo "Upload effectué avec succès pour le fichier";
    }
    else
    {
    echo "Echec du téléchargement du fichier"  ; 
    }
}


?>
