<h3>Program 3.8</h3>
<?php
    // Contoh 1
    echo "Contoh 1<br>";
    $i = 1;
    while ($i <= 10) {
        echo $i++;
    }
    echo "<br><br>";
    // Contoh 2
    echo "Contoh 2<br>";
    $i = 1;
    while ($i <= 10) {
        echo "$i";
        $i++;
    }
    echo "<br><br>";
    // Contoh 3
    echo "Contoh 3<br>";
    // Contoh 4
    $i = 1;
    while ($i <= 6) {
        echo "<h$i> Heading $i <h$i>";
        $i++;
    }
?>