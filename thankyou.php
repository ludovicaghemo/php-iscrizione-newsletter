<?php
session_start();
$useremail = $_SESSION['savedEmail'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grazie</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container text-center my-5">
        <h1 class="alert alert-success">Iscrizione effettuata con successo!</h1>
        <h2>Ciao <?php echo $useremail ?>!</h2>
        <h3>Ti ringraziamo per la fiducia :-) </h3>
    </div>

</body>

</html>