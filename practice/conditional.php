<?php

// kondisional  
$weather = "sunny";

if ($weather == "sunny") {
    echo "Berangkat ke pantai <br>"; // jika kondisi true
} else {
    echo "Tetap di rumah <br>"; // jika kondisi false
}


// kondisional dengan operator ternary

$weather = "rainy";

echo $weather == "sunny" ? "Berangkat ke pantai <br>" : "Tetap di rumah <br>"; // jika kondisi true atau false



// kondisional dengan switch case

$weather = "rainy";

switch ($weather) {
    case "sunny":
        echo "Berangkat ke pantai <br>";
        break;
    case "rainy":
        echo "Tetap di rumah <br>";
        break;
    default:
        echo "Tidak ada aksi <br>";
        break;
}
