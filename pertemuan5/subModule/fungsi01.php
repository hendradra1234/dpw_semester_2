<h3>Program 5.11</h3>
<?php
    function cetak_ganjil_no_return () {
        for ($i=0; $i < 100; $i++) {
            if ($i % 2 == 1) {
                echo "Bilangan Ganjil: $i<br>";
            }
        }
    }

    cetak_ganjil_no_return();
?>