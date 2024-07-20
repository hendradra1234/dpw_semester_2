<h3>Program 5.2</h3>
<?php 
    $arrNilai = array ("Diya" => 80, "Hadi" => 90, "Ana" => 75, "Budi" => 85);
    echo $arrNilai['Diya']; //80
    echo $arrNilai['Hadi']; //90
    $arrNilai = array();
    $arrNilai['Ami'] = 80;
    $arrNilai['Asma'] = 95;
    $arrNilai['Sri'] = 77;
    echo $arrNilai['Asma']; //95
    echo $arrNilai['Ami']; //8
?>