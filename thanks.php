<?php


echo 'Merci, ' . $_POST['user_name'] . ' ' . $_POST['user_prenom'] . ' de nous avoir contacté à propos de ' . $_POST['user_sujet'] . '. <br>';
echo '<br>';
echo 'Un de nos conseillers vous contactera soit à l\'adresse ' . $_POST['user_mail'] . ' ou par téléphone au ' . $_POST['user_phone'] .
    ' dans les plus brefs délais pour traiter votre demande : <br>';
echo '<br>';
echo $_POST['user_message'];


?>

