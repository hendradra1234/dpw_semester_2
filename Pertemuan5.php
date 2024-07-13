<h1>Pertemuan 5</h1>
<h2>Array dan Fungsi</h2>

<h3>Program 5.1</h3>
<?php 
    $arryBuah = array ("Mangga", "Apple", "Pisang", "Jeruk");
    echo "$arryBuah[1]<br>";
    echo "$arryBuah[2]<br>";

    $arryWarna[] = "red";
    $arryWarna[] = "blue";
    $arryWarna[] = "yellow";
    $arryWarna[] = "grey";

    echo "<div style = 'background-color:$arryWarna[1]'>$arryWarna[1]</div><br>";
    echo "<div style = 'background-color:$arryWarna[3]'>$arryWarna[3]</div><br>";
?>
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
<h3>Program 5.3</h3>
<?php 
    $arrWarna = array ("Blue","Black","Red","Yellow","Green");
    echo "Menampilkan isi array dengan for : <br>";
    for ($i=1; $i<count($arrWarna); $i++) {
    echo "Do you like <font color=$arrWarna[$i]>". $arrWarna[$i]."</font> ?<br>";
    }
    echo "<br>Menampilkan isi array dengan foreach : <br>";
    foreach ($arrWarna as $warna) {
    echo "Do you like <font color=$warna>". $warna ."</font> ?<br>";
}
?>
<h3>Program 5.4</h3>
<?php 
    $arrNilai = array ("Ani" => 80, "Hadi" => 90, "Ana" => 75, "Budi" => 85);
    echo "Menampilkan isi array dengan foreach : <br>";
    foreach ($arrNilai as $nama => $nilai) {
    echo "Nilai $nama = $nilai<br>";
    }
    // reset ($arrNilai);
    // echo "<br>Menampilkan isi array dengan while dan list : <br>";
    // while (list ($nama, $nilai) = each($arrNilai)) {
    //     echo "Nilai $nama = $nilai<br>";
    // }
?>
<h3>Program 5.5</h3>
<?php 
    $arryWarna = array("Blue", "Black", "Red", "Yellow", "Green");
    $arrNilai = array("Jack"=>80, "Daniel"=>90, "Ana"=>75, "Budi"=> 86);
    echo "<pre>";
    print_r ($arrWarna);
    echo "<br>";
    print_r ($arrNilai);
    echo "</pre>";
?>
<h3>Program 5.6</h3>
<?php 
    $arrNilai = array ("Ani" => 80, "Hadi" => 90, "Sri" => 75, "Budi" => 85);
    echo "<b>Array sebelum pengurutan</b>";
    echo "<pre>";
    print_r($arrNilai);
    echo "</pre>";
    sort($arrNilai);
    reset($arrNilai);
    echo "<b>Array setelah pengurutan dengan sort()</b>";
    echo "<pre>";
    print_r($arrNilai);
    echo "</pre>";
    rsort($arrNilai);
    reset($arrNilai);
    echo "<b>Array setelah pengurutan dengan rsort()</b>";
    echo "<pre>";
    print_r($arrNilai);
    echo "</pre>"
?>
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
<h3>Program 5.8</h3>
<?php 
    $arrNilai = array ("Ani"=>80, "Hadi"=>90, "Sri"=>75, "Budi"=>85);
    echo "<b>Array sebelum pengurutan</b>";
    echo "<pre>";
    print_r($arrNilai);
    echo "</pre>";
    ksort($arrNilai);
    reset($arrNilai);
    echo "<b>Array setelah pengurutan dengan ksort()</b>";
    echo "<pre>";
    print_r($arrNilai);
    echo "</pre>";
    krsort($arrNilai);
    reset($arrNilai);
    echo "<b>Array setelah pengurutan dengan krsort()</b>";
    echo "<pre>";
    print_r($arrNilai);
    echo "</pre>"
?>
<h3>Program 5.9</h3>
<?php 
    $transport = array('bike', 'foot', 'car', 'plane');
    echo "<pre>";
    print_r ($transport);
    echo "</pre>";
    $mode = current($transport);
    echo $mode."<br>";
    $mode = next($transport);
    echo $mode."<br>";
    $mode = current($transport);
    echo $mode."<br>";
    $mode = prev($transport);
    echo $mode."<br>";
    $mode = end($transport);
    echo $mode."<br>";
    $mode = current($transport);
    echo $mode."<br>";
?>
<h3>Program 5.10</h3>
<?php
    $arryBuah = array("Mangga", "Apel", "Pisang", "Kedondong", "Jeruk");
    if (in_array("Kedondong", $arryBuah)) {
       echo "<label>Ada Buah keondondong di sini</label>";
    } else {
        echo "<label>Tidak ada kedondong</label>";
    }
?>
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
<h3>Program 5.22</h3>
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
<h3>Program 5.13</h3>
<?php
    function tambah_string_by_value_inside_function($str) {
        $str = $str.", Selindung";
        return $str;
    }

    $str = "ISB Atma Luhur";
    echo "\$str = $str<br>";
    echo tambah_string_by_value_inside_function($str)."<br>";
    echo "\$str = $str<br>";
?>
<h3>Program 5.14</h3>
<?php
    function tambah_string_by_reference_inside_function ($str) {
        $str = $str . ", Selindung";
        return $str;
    }

    $str = " ISB Atma Luhur ";
    echo "\$str = $str<br>";
    echo tambah_string_by_reference_inside_function ($str). "<br>";
    echo "\$str = $str<br>"
?>
<h3>Program 5.15</h3>
<?php
    function luas_lingkaran_defined_functions($jari) {
        return 3.14 * $jari * $jari;
    }

    $arr = luas_lingkaran_defined_functions(100);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
?>
<h3>Program 5.16</h3>
<?php
    if (function_exists('exif_read_data')) {
        echo "Fungsi exif_read_data() ada di PHP.<br />\n";
    } else {
        echo "Fungsi exif_read_data() tidak ada di PHP.<br />\n";
    }
?>