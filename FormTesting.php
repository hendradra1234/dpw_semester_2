<h2>Form Testing</h2>
<form action="" method ="POST" name = "formINput">
    <label>Input Nama</label>
    <input type = "text" id = "name" name = "nama" />
    <label>Input Nilai</label>
    <input type = "number" id = "grade" name = "nilai"/>
    <button type = "submit" name = "input">Submit</button>
</form>

<?php
if (isset($_POST['input'])) {
   $nama = $_POST['nama'];
   $nilai = $_POST['nilai'];

   if ($nilai > 60) {
    echo "<p>Nama: $nama<br> Anda lulus, nilai anda $nilai</p>";
    return;
   }
   echo "<p>Nama: $nama<br> Anda Tidak lulus, nilai anda $nilai</p>";
}
?>