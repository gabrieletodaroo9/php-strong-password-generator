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
    <link rel="stylesheet" href="./css/style.css">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Code+Latin:wght@100..700&family=Press+Start+2P&display=swap" rel="stylesheet">
</head>

<body class="vh-100 m-plus-code-latin">
    <div class="h-100 d-flex flex-column">
        <header class="bg-light text-dark">
            <h1 class="text-center fw-bold py-4 m-0 text-uppercase fs-2">Strong Password Generator</h1>
        </header>

        <div class="main flex-grow-1 d-flex flex-column justify-content-center align-items-center gap-5">
            <div class="card">
                <div class="card-header py-3 bg-dark text-light">
                    <h3 class="text-center fw-semibold">Generate your secure password</h3>
                </div>

                <div class="card-body d-flex align-items-center justify-content-center py-5 px-4">
                    <form action="" method="GET">
                        <label>Length:</label>
                        <input type="number" value="5" min="5" max="20" name="passLength" class="form-control-inline form-control-sm me-3">

                        <div class="form-check-inline py-4">
                            <input class="form-check-input" type="checkbox" name="letters" id="letters">
                            <label class="form-check-label" for="letters">Letters</label>
                        </div>

                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" name="numbers" id="numbers">
                            <label class="form-check-label" for="numbers">Numbers</label>
                        </div>

                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" name="symbols" id="symbols">
                            <label class="form-check-label" for="symbols">Symbols</label>
                        </div>

                        <button type="submit" class="btn btn-dark btn-sm">Generate</button>
                    </form>
                </div>
            </div>

        </div>

    </div>
</body>

</html>