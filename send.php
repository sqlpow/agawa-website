<?php

if (isset($_REQUEST['email']))  {

    $emailTo = "agawaleba@gmail.com";

    $subject = "AGAWA";

    $firstname = $_REQUEST['firstname'];

    $lastname = $_REQUEST['lastname'];

    $mail = $_REQUEST['content'];

    $content = "Imie:  $firstname  \nNazwisko: $lastname \nTresc: $mail";

    $headers = "From: ".$_REQUEST['email'] ;


    mail($emailTo, $subject, $content, $headers);

     header('Location: index.php');
    exit;

    } else {

    echo "The email could not be sent.";

    }


    ?>
