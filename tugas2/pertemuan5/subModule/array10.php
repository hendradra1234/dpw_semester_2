<h3>Program 5.10</h3>
<?php
    $arryBuah = array("Mangga", "Apel", "Pisang", "Kedondong", "Jeruk");
    if (in_array("Kedondong", $arryBuah)) {
       echo "<label>Ada Buah kedondong di sini</label>";
    } else {
        echo "<label>Tidak ada kedondong</label>";
    }
?>