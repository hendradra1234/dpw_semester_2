<h3>Latihan Array</h3>

<?php
$mahasiswa = array("Diya" => 80, "Hadi"=>90, "Ana"=>75, "Budi"=>85);
?>

<form  action="" method ="POST" name = "inputform">
    <label>Lihat Nilai Siswa</label>
    <input type = "text" name = "Name"/>
    <button type = "submit" name = "submit">Submit</button>
</form>
<?php
if (isset($_POST['submit'])) {
   $name = $_POST['Name'];

   if (array_key_exists(ucfirst($name), $mahasiswa)) {
    $grades = $mahasiswa[ucfirst($name)];
    echo "Nilai $name Adalah $grades";
    return;
   }

    echo "Siswa tidak di temukan";
}
?>