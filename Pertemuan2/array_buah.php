<?php
    $ar_buah = ["pepaya", "Mangga", "pisang", "jambu"];
    // menampilkan buah index ke 1
    echo $ar_buah[1];
    // menampilkan jumlah buah
    echo "<br/>jumlah buah " . count($ar_buah);
    // menampilkan seluruh buah
    echo "<ol>";
    foreach ($ar_buah as $buah){
        echo "<li>" . $buah . "</li>";
    }echo "</ol>";

    // menambahkan buah
    $ar_buah[] = "Apel";

    // menghapus  buah index ke 1
    unset($ar_buah[1]);

    // mengubah index ke 2 menjadi manggis 
    $ar_buah[2] = "manggis";

    // menamplkan selueruh buah dengan index nya
    echo "<ul>";
    foreach ($ar_buah as $Buah => $v) {
        echo "<li>buah index - " .$Buah ." adalah ". $v ."</li>";
    }
    echo "</ul>";
?>