<?php

// array multidimentions

$names = array(
    array('first' => 'Ammar', 'last' => 'Asysyakur'),
    array('first' => 'Abdul', 'last' => 'Latif')
);

echo "User Pertama" . $names[0]['first'] .  $names[0]['last'] . "<br>";
echo "User Kedua" . $names[1]['first'] .  $names[1]['last'] . "<br>";
