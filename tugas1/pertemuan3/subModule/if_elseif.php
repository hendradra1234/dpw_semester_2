<h3>Program 3.5</h3>
<?php
    $harga = 50000;
    if ($harga >= 50000) {
        echo "Selamat Anda Mendapat diskon 20%<br>";
    } elseif ($harga >= 30000) {
        echo "Selamat anda Mendapat diskon 10%<br>";
    } else {
        echo "Terima kasih telah berbelanja, mohon maaf anda tidak medapatkand diskon<br>";
    }
?>
