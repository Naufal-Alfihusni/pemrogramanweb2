<?php
    $laptop = [
        "Asus", "Lenovo", "Dell", "Realme"
    ];

    //menambahkan element di awal
    array_unshift($laptop, "HP", "Acer");

    //hasil
    echo "Hasil";
    foreach ($laptop as $p) {
        echo "<br>". $p;
    }
?>