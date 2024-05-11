<?php

// fungsi menampilkan angka Genap 

function evenNumber($firstNumber, $lastNumber)
{
    for ($i = $firstNumber; $i <= $lastNumber; $i++) {
        if ($i % 2 == 0) {
            echo $i . "<br>";
        }
    }
}

echo evenNumber(1, 5);
