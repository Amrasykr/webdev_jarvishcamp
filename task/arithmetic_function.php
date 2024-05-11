<?php

// Fungsi Arimatika


// operator penambahan
function sum($firstNumber, $secondNumber)
{
    return $firstNumber + $secondNumber;
}

// operator pengurangan
function subtraction($firstNumber, $secondNumber)
{
    return $firstNumber - $secondNumber;
}


// operator perkalian
function multiplication($firstNumber, $secondNumber)
{
    return $firstNumber * $secondNumber;
}

// operator pembagian
function division($firstNumber, $secondNumber)
{
    return $firstNumber / $secondNumber;
}


echo "Hasil penjumlahan 10 + 5 = " . sum(10, 5) . "<br>";
echo "Hasil pengurangan 10 - 5 = " . subtraction(10, 5) . "<br>";
echo "Hasil perkalian 10 * 5 = " . multiplication(10, 5) . "<br>";
echo "Hasil pembagian 10 / 5 = " . division(10, 5) . "<br>";
