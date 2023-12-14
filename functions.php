<?php
if (!isset($_SESSION)) {
    session_start();
    // var_dump($_SESSION); 
}


$useremail = "";
$message = "";
$messageAlert = "";


// Funzione per validazione di indirizzo email
function validateEmail($useremail)
{
    return filter_var($useremail, FILTER_VALIDATE_EMAIL);
}
//Per capire se utente ha fatto submit
if (isset($_POST['email'])) {
    $useremail = $_POST['email'];
    if (empty($useremail)) {
        $message = "Inserisci un indirizzo email!";
        $messageAlert = "alert-danger";
    } elseif (!validateEmail($useremail)) {
        $message = "Indirizzo email non valido!";
        $messageAlert = "alert-danger";
    } else {
        //$message = "Indirizzo email valido";
        //$messageAlert = "alert-success";
        $_SESSION['savedEmail'] = $useremail;
        header("Location: ./thankyou.php");
        die;
    }
}
