<h3>Program 5.4</h3>
<?php 
    $arrNilai = array ("Ani" => 80, "Hadi" => 90, "Ana" => 75, "Budi" => 85);
    echo "Menampilkan isi array dengan foreach : <br>";
    foreach ($arrNilai as $nama => $nilai) {
        echo "Nilai $nama = $nilai<br>";
    }
    reset ($arrNilai);
    echo "<br>Menampilkan isi array dengan while dan list : <br>";

    // each depreciated, pakai cara lain

    // while (list ($nama, $nilai) = each($arrNilai)) {
    //     echo "Nilai $nama = $nilai<br>";
    // }

    foreach ($arrNilai as $name => $nilai) {
        echo "Nilai $name = $nilai<br>";
    }
?>