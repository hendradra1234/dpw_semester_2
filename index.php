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
<html>
    <head>
        <title>DPW Semester 2</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <?php
            echo "<h3><strong>Running php in date "
            . date("Y-m-d")
            . "<br></strong></h3>";
        ?>
        <h1>List Tugas Tertera</h1>
        <h2>List Tugas 1 dan 2</h2>
        <p>
            <label>List Tugas</label>
            <ul>
                <li><a href="tugas1/">Tugas 1</a></li>
                <li><a href="tugas2/">Tugas 2</a></li>
                <li><a href="dpw_hendra/login.php">Latihan Database (XAMPP)</a></li>
            </ul>
        </p>
        <?php
            $end = 5;

            echo "<h5>For with if condition</h5>";
            for ($i=1; $i <= $end; $i++) {
                textValidator($i, "For");
            }

            echo "<h5>While with if condition</h5>";
            $a = 1;
            while ($a <= $end) {
                textValidator($a, "While");
                $a+=1;
            }
        ?>
    </body>
</html>