<?php
function textValidator($i, $prefix = "") {
    echo "<br> $prefix running iteration $i <br>";
    if (($i % 2) == 1) {
        echo "<strong>(Bilangan Ganjil $i)<br></strong>";
        return;
    } elseif (($i % 2) == 0) {
        echo "<strong>(Bilangan Genap $i)<br></strong>";
        return;
    } elseif ($i >= $end) {
       echo "End of looping in $i iteration<br>";
       return;
    }

    echo "<h3>undefined condition</h3>";
}
?>

<?php
echo "<h2><strong>Running php in date "
. date("Y-m-d")
. "<br></strong></h2>";
?>

<p>
    <label>List Tugas Tertera</label>
<ul>
    <li><a href="pertemuan1/">Pertemuan 1</a></li>
    <li><a href="pertemuan2/">Pertemuan 2</a></li>
    <li><a href="latihan2/">Latihan 2</a></li>
    <li><a href="pertemuan3.php">Pertemuan 3</a></li>
    <li><a href="pertemuan4.php">Pertemuan 4</a></li>
    <li><a href="pertemuan5.php">Pertemuan 5</a></li>
    <li><a href="pertemuan6/">Pertemuan 6</a></li>
    <li><a href="pertemuan7/">Latihan Pertemuan 7</a></li>
    <li><a href="FormTesting.php">Form Testing Exercises</a></li>
</ul>
</p>
<?php
$end = 10;

echo "<h3>For with if condition</h3>";
for ($i=1; $i <= $end; $i++) {
    textValidator($i, "For");
}

echo "<h3>While with if condition</h3>";
$a = 1;
while ($a <= $end) {
    textValidator($a, "While");
    $a+=1;
}

?>