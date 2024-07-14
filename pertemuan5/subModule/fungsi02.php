<h3>Program 5.12</h3>
<?php
    function cetak_ganjil_with_parameter ($awal, $akhir) {
        for ($i=$awal; $i<$akhir; $i++) {
            if ($i%2 == 1) {
                echo "$i ";
            }
        }
    }

    $a = 10;
    $b = 50;
    echo "<b>Bilangan ganjil dari $a sampai $b : </b><br>";
    cetak_ganjil_with_parameter($a, $b);
?>