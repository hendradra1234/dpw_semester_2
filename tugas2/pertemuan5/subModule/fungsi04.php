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