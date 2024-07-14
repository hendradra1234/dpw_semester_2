<h3>Program 3.6</h3>
<?php
    $tahun = date ('Y');
    $kabisat = ($tahun%4 == 0) ? "KABISAT" : "Bukan Kabisat";
    echo "Tahun <b>$tahun</b> $kabisat<br>";
?>