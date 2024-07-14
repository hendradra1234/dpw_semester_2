<h3>Latihan Percabangan</h3>

<form  action="" method ="POST" name = "inputform">
    <label>Input Nilai Anda</label>
    <input type = "number" name = "grades"/>
    <button type = "submit" name = "submit">Submit</button>
</form>
<?php
if (isset($_POST['submit'])) {
   $nilai = $_POST['grades'];

   if ($nilai > 60) {
    echo "<p>Anda lulus, nilai anda $nilai</p>";
    return;
   }
   echo "<p>Anda Tidak lulus, nilai anda $nilai</p>";
}
?>