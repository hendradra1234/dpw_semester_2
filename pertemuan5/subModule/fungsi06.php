<h3>Program 5.16</h3>
<?php
    function luas_lingkaran_defined_functions($jari) {
        return 3.14 * $jari * $jari;
    }

    $arr = luas_lingkaran_defined_functions(100);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
?>