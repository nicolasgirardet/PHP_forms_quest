<?php

echo '<p> Merci '.$_POST['user_firstname'].' '.$_POST['user_lastname'].' de nous avoir contacté à propos de '.$_POST['subject'].'.<p>';
echo '<br>';
echo '<p> Un de nos conseiller vous contactera soit à l’adresse '.$_POST['user_email'].' ou par téléphone au '.$_POST['user_phone'].' dans les plus brefs délais pour traiter votre demande :<p>'; 
echo '<br>';
echo '<p>'.$_POST['user_message'].'<p>';


?>
