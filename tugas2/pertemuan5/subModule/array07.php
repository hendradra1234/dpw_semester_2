<h3>Program 5.7</h3>
<?php 
    $arrNilai = array ("Ani" => 80, "Hadi" => 90, "Sri" => 75, "Budi" => 85);
    echo "<b>Array sebelum pengurutan</b>";
    echo "<pre>";
    print_r($arrNilai);
    echo "</pre>";
    asort($arrNilai);
    reset($arrNilai);
    echo "<b>Array setelah pengurutan dengan asort()</b>";
    echo "<pre>";
    print_r($arrNilai);
    echo "</pre>";
    arsort($arrNilai);
    reset($arrNilai);
    echo "<b>Array setelah pengurutan dengan arsort()</b>";
    echo "<pre>";
    print_r($arrNilai);
    echo "</pre>";
?>