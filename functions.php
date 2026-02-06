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