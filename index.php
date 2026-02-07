<?php
session_start();
require_once("./functions.php");

$passLength = $_GET["passLength"] ?? 0;
$password = "";

$letters = $_GET["letters"] ?? "";
$numbers = $_GET["numbers"] ?? "";
$symbols = $_GET["symbols"] ?? "";


if ($passLength) {
    $password = generatePassword($passLength, $letters, $numbers, $symbols);
    $_SESSION["password"] = $password;
    header("Location: ./result.php");
}
// var_dump($password)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="text-center fw-bold my-4">Strong Password Generator</h1>
        <h3 class="text-center fw-semibold mb-4">Generate your secure password</h3>
        <!-- Form -->

        <div class="d-flex align-items-center justify-content-center">
            <form action="" method="GET">
                <label>Lunghezza:</label>
                <input type="number" name="passLength" class="form-control-inline mb-3">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" name="letters" id="letters">
                    <label class="form-check-label" for="letters">Lettere</label>
                </div>

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" name="numbers" id="numbers">
                    <label class="form-check-label" for="numbers">Numeri</label>
                </div>

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" name="symbols" id="symbols">
                    <label class="form-check-label" for="symbols">Simboli</label>
                </div>

                <button type="submit" class="btn btn-dark btn-sm">Genera</button>
            </form>
        </div>


    </div>

</body>

</html>