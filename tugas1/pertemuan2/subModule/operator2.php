<h1>Program 2.6</h1>
<?php
    $a = 5;
    $b = 4;
    echo "$a == $b : ". ($a == $b);
    echo "<br>$a != $b : ". ($a != $b);
    echo "<br>$a > $b : ". ($a > $b);
    echo "<br>$a < $b : ". ($a < $b);
    echo "<br>($a == $b) && ($a > $b) : ". (($a != $b) && ($a > $b));
    echo "<br>($a == $b) || ($a > $b) : ". (($a != $b) || ($a > $b));
?>