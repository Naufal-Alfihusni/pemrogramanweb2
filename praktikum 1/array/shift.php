<?php
    $rokok = ["Samsu", "Esse", "Kretek", "Marlong", "Garpit"];

    //Menghapus element pertama
    $awal = array_shift($rokok);

    //hasil
    echo "Rokok yang dihapus : $awal";
    echo "<br>Array seteleh shift <br>";
    foreach ($rokok as $r) {
        echo "$r <br>";
    }

?>