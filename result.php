<?php session_start();
    $password=$_SESSION["password"];
    // var_dump($password)
    ?>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Results</title>
</head>
<body>
<div class="container">
<h1 class='text-center fw-bold my-4'>Secure password generated</h1>
    <?php 
    echo "<p class='text-center '>$password</p>"
    ?>
</div>    

</body>
</html>