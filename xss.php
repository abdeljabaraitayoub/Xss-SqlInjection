<?php

if (!isset($_POST['name']) || !isset($_POST['password'])) {
    echo ('Il faut un email et un message pour soumettre le formulaire.');
    return;
    $userInput = "<script>alert('Hello');</script>";
    $safeInput = htmlspecialchars($userInput);
    echo $safeInput; // Output: &lt;script&gt;alert('Hello');&lt;/script&gt;

}

$name = $_POST['name'];
$password = $_POST['password'];

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Site de Recettes - Demande de contact reçue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <h1>Message bien reçu !</h1>

        <div class="card">

            <div class="card-body">
                <h5 class="card-title">Rappel de vos informations</h5>
                <p class="card-text"><b>name</b> : <?php echo strip_tags($name); ?></p>
                <p class="card-text"><b>password</b> : <?php echo ($password); ?></p>
            </div>
        </div>
    </div>
</body>


</html>
<!-- strip_tags -->
<!-- htmlspecialchars -->