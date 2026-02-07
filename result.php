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
     <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Code+Latin:wght@100..700&family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <title>Results</title>
</head>
<body class="vh-100 m-plus-code-latin">
    <div class="h-100 d-flex flex-column">
        
        <header class="bg-light text-dark">
            <h1 class="text-center fw-bold py-4 m-0 text-uppercase fs-2">Strong Password Generator</h1>
        </header>

        <div class="main flex-grow-1 d-flex flex-column justify-content-center align-items-center">
            
            <div class="card text-center">
                <div class="card-header py-3 px-5 bg-dark text-light">
                    <h3 class="fw-semibold m-0 fs-4">Secure password generated</h3>
                </div>

                <div class="card-body py-5 px-4">
                    <p class="fs-4 pb-4 press-start-2p-regular"><?php echo $_SESSION["password"] ?></p>
                    <a href="index.php" class="btn btn-dark btn-sm">Back to generate!</a>
                </div>
            </div>

        </div>

    </div>
</body>
</html>