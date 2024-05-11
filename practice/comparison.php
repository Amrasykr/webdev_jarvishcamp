<?php

// operator pembanding

$firstNumber = 10;
$secondNumber = 5;

$comparison = $firstNumber == $secondNumber; // sama dengan
$comparison2 = $firstNumber === $secondNumber; // sama dengan dan tipe data sama / sama dengan identik
$comparison3 = $firstNumber != $secondNumber; // tidak sama dengan
$comparison4 = $firstNumber < $secondNumber; // kurang dari
$comparison5 = $firstNumber !== $secondNumber; // tidak sama dengan dan tipe data tidak sama
$comparison5 = $firstNumber > $secondNumber; // lebih dari
$comparison6 = $firstNumber <= $secondNumber; // kurang dari atau sama dengan
$comparison7 = $firstNumber >= $secondNumber; // lebih dari atau sama dengan

echo "Apakah $firstNumber == $secondNumber ? $comparison <br>";
echo "Apakah $firstNumber === $secondNumber ? $comparison2 <br>";
echo "Apakah $firstNumber != $secondNumber ? $comparison3 <br>";
echo "Apakah $firstNumber < $secondNumber ? $comparison4 <br>";
echo "Apakah $firstNumber !== $secondNumber ? $comparison5 <br>";
echo "Apakah $firstNumber > $secondNumber ? $comparison6 <br>";
echo "Apakah $firstNumber <= $secondNumber ? $comparison7 <br>";
