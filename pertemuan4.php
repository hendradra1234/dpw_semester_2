<h1>Pertemuan 4</h1>
<h2>Struktur Perulangan</h2>

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
<h3>Program 3.9</h3>
<?php
$i = 1;

do {
    echo "$i ";
    $i+=2;
} while ($i <= 20);
?>
<h3>Program 3.10</h3>
<?php
for ($i=1; $i<10; $i++) {
    if ($i == 5)
        continue;
    if ($i == 8)
        break;
    echo "$i ";
}
?>