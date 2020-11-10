<?php

if (isset($_POST['submit'])){
    $name = $_POST['Naam'];
    $vNaam = $_POST['Voornaam'];
    $onderwerp = $_POST['Onderwerp'];
    $email = $_POST['Email'];
    $bericht = $_POST['bericht'];

    $mailTo = 'r0860443@student.thomasmore.be';
    $header = 'From: '.$email;
    $txt = 'You have received an email from '.$name .$vNaam ".\n\n".$bericht;

    mail($mailTo,$onderwerp,$txt,$header);
    header("Location")
    }
}