<h1>Program 2.5</h1>
<?php
    $gaji = 2500000;
    $pajak = 0.11;

    $thp = $gaji - $pajak;
    $pajak = ($gaji*$pajak);
    echo "
    Gaji Sebelum pajak : Rp $gaji <br>
    pajak : Rp $pajak <br>
    Gaji Setelah pajak : Rp $thp <br>
    ";
?>