<?php
$useremail = "";
$message = "";
$messageAlert = "";


// Funzione per validazione di indirizzo email
function validateEmail($useremail) {
    return filter_var($useremail, FILTER_VALIDATE_EMAIL);
}

if (isset($_POST['email'])) {
    $useremail = $_POST['email'];
    if (empty($useremail)) {
        $message = "Inserisci un indirizzo email!";
        $messageAlert = "alert-danger";
    } elseif (!validateEmail($useremail)) {
        $message = "Indirizzo email non valido!";
        $messageAlert = "alert-danger";
    } else {
        $message = "Indirizzo email valido";
        $messageAlert = "alert-success";   
    }
}
?>