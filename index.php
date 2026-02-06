<!-- FUNCTION PASSWORD -->
<?php
function generatePassword(int $passLength)
{
    string:

    $allChar = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!.,-_";
    $password = "";
    for ($i = 0; $i < $passLength; $i++) {
        $randomChar = rand(0, strlen($allChar) - 1);
        $password .= $allChar[$randomChar];
    }
    return $password;
}
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

<?php
$passLength = $_GET["passLength"] ?? 0;
$password = "";

if($passLength){
    $password = generatePassword($passLength);
}
// var_dump($password)
?>



<body>
    <div class="container">
        <h1 class="text-center fw-bold my-4">Strong Password Generator</h1>
        <h3 class="text-center fw-semibold mb-4">Generate your secure password</h3>
        <!-- Form -->
        <form action="">
            <label class="form-label" for="passLength">Enter password length</label>
            <input class="form-control" type="number" max="20" name="passLength" id="passLength">
            <button type="submit" class="btn btn-dark mt-3">Genera</button>
        </form>
        <?php 
        if($password){
           echo "<h5 class='text-secondary text-center'>$password</h5>";
        }
        ?>
    </div>


</body>

</html>