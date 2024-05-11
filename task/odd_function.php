<?php

// fungsi menampilkan angka ganjil 

function oddNumber($firstNumber, $lastNumber)
{
    for ($i = $firstNumber; $i <= $lastNumber; $i++) {
        if ($i % 2 != 0) {
            echo $i . "<br>";
        }
    }
}

echo oddNumber(1, 10);
