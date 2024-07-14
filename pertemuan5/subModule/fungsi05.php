<?php
    function tambah_string (&$str) {
        $str = $str . ", Selindung";
        return $str;
    }
    //
    $str = "ISB Atma Luhur";
    echo "\$str = $str<br>";
    echo tambah_string ($str). "<br>";
    echo "\$str = $str<br>";
?>