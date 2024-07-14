<h3>Program 3.7</h3>
<?php
    /* contoh 1 */
    echo "Contoh 1<br>";
    for ($i = 1; $i <= 10; $i++) {
        echo " $i ";
    }
    echo "<br><br>";

    /*contoh 2 */
    echo "Contoh 2<br>";
    for ( $i = 1; ; $i++) {
        if ($i > 10) {
            break;
        }
        echo "$i ";
    }
    echo "<br><br>";

    /* contoh 3 */
    echo "Contoh 3<br>";
    $i = 1;
    for ( ; ;) {
        if ($i > 10) {
            break;
        }
        echo "$i ";
        $i++;
    }
    echo "<br><br>";

    /* Contoh 4 */
    echo "Contoh 4<br>";
    for ($i = 1; $i <= 10; print "$i ", $i++)
?>