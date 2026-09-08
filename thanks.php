<?php

if (empty ($_POST["user_first_name"])) {
    $first_nameErr = "Le prénom est obligatoire";
}
if (empty ($_POST["user_name"])) {
    $nameErr = "Le nom est obligatoire";
}
if (empty ($_POST["user_subject"])) {
    $subjectErr = "Selectionnez le sujet";
}
if (empty ($_POST["user_number"])) {
    $numberErr = "Le numéro est obligatoire";
}
if (empty ($_POST["user_message"])) {
    $messageErr = "Veuillez écrire un message";
}
if (empty ($_POST["user_email"])) {
    $emailErr = "l'adresse mail et obligatoire";
} elseif (!filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL)) {
    $emailErr = "L'adresse mail est invalide";
}

if (empty($first_nameErr) &&
    empty ($nameErr) &&
    empty ($subjectErr) &&
    empty ($numberErr) &&
    empty ($messageErr) &&
    empty ($emailErr)
) {
echo "Merci" . " " . $_POST["user_first_name"] . " " . $_POST["user_name"] . " " . "de nous avoir contacté à propos de" ." ". $_POST["user_subject"];

echo ".";

echo " ". "Un de nos conseiller vous contactera soit à l’adresse" ." ". $_POST["user_email"] ." ". "ou par téléphone au" ." ".$_POST["user_number"] ." ". "dans les plus brefs délais pour traiter votre demande : " ."". $_POST["user_message"];
} else {
    if (!empty ($first_nameErr)) {
        echo $first_nameErr ."<br>";
    }
    if (!empty ($nameErr)) {
        echo $nameErr ."<br>";
    }
    if (!empty ($subjectErr)) {
        echo $subjectErr ."<br>";
    }
    if (!empty ($numberErr)) {
        echo $numberErr ."<br>";
    }
    if (!empty ($messageErr)) {
        echo $messageErr ."<br>";
    }
    if (!empty ($emailErr)) {
        echo $emailErr ."<br>";
    }
}