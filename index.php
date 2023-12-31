<?php
// include_once perchè si tratta di un file con una funzione
include_once __DIR__ . "/functions.php";

if (!isset($_SESSION)) {
    session_start();
    // var_dump($_SESSION); 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Iscrizione Newsletter</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 text-center">
        <h1 class="mb-3">Iscriviti alla nostra newsletter!</h1>
        <form method="post" action="index.php">
            <div class="mb-3">
                <label for="email">Inserisci qui la tua mail</label>
                <input type="text" id="email" name="email" value="<?php echo $_POST['email'] ?? '' ?>" placeholder="indirizzo email">
                <span class="ms-4 alert <?php echo $messageAlert; ?>"><?php echo $message; ?></span>
            </div>
            <button class="btn btn-success" type="submit">Invia</button>
        </form>
    </div>
</body>

</html>