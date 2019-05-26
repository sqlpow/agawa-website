<?php

if (isset($_REQUEST['email']))  {

    $emailTo = "kasia.pietrosiuk@gmail.com";

    $subject = "AGAWA";

    $firstname = $_REQUEST['firstname'];

    $lastname = $_REQUEST['lastname'];

    $mail = $_REQUEST['subject'];

    $content = "Imie:  $firstname  \nNazwisko: $lastname \nTresc: $mail";

    $headers = "From: ".$_REQUEST['email'] ;


    mail($emailTo, $subject, $content, $headers);

     header('Location: ' . $_SERVER['REQUEST_URI']);
    exit;

    } else {

    echo "The email could not be sent.";

    }


    ?>