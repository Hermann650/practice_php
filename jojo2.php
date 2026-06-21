<?php
    $array = ["Meja", "Kursi", "Sofa", "TV"];
    echo count($array);
    echo "\n";
    array_push ($array, "Vas Bunga");
    array_unshift ($array, "AC");
    print_r($array);
    echo "\n";
    echo in_array("Meja", $array);
    $ger = "Gerrard Mahogany Parhusip";
    $napalm = explode(" ", $ger);
    print_r ($napalm);
    $mess = [27,453,63,257,932,3409,2340,2023,9281,21,325,6,340,20,92,073,8712,39,289,23];
    sort($mess);
    print_r($mess);
?>