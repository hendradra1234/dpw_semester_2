<?php echo "<h2><strong>Running php in date " . date("Y-m-d") . "<br></strong></h2>";

echo "<h3>for with if condition</h3>";
$end = 10;

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

for ($i=1; $i <= $end; $i++) {
    textValidator($i, "For");
}

$a = 1;
while ($a <= $end) {
    textValidator($a, "While");
    $a+=1;
}

?>