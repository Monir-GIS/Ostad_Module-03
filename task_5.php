<?php
/*
Task 5: Password Generator => From Faysal Vai
Create a PHP function called generatePassword($length) that generates a random password of the specified length.
The password should include lowerCase letters, upperCase letters, numbers, and special characters (!@#$%^&*()_+).
Write a PHP program to generate a password with a length of 12 characters using this function and print the password.
*/

function generatePassword($length)
{
    $lowerCase = 'abcdefghijklmnopqrstuvwxyz';
    $upperCase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+`~';

    $characters = $lowerCase . $upperCase . $numbers . $specialChars;

    $charLength = strlen($characters);

    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, $charLength - 1);
        $password .= $characters[$randomIndex];
    }
    return $password;
}

$password = generatePassword(12);

echo "Your Password: $password\n";
