<?php
function generatePassword(int $passLength, bool $addLetter , bool $addNumber, bool $addSymbol)
{
    string:

    $allChar = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!.,-_";
    $filteredChar="";
    if($addLetter){
        $filteredChar .= "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    }
    if($addNumber){
        $filteredChar .= "0123456789";
    }
    if($addSymbol){
        $filteredChar .= "!.,-_";
    }

    if(!$filteredChar){
        $filteredChar .= $allChar;
    }

    $password = "";
    for ($i = 0; $i < $passLength; $i++) {
        $randomChar = rand(0, strlen($filteredChar) - 1);
        $password .= $filteredChar[$randomChar];
    }
    return $password;
}
?>