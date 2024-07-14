<h3>Latihan Percabangan</h3>

<form  action="" method ="POST" name = "inputform">
    <label>Input Jumlah Uang</label>
    <input type = "number" name = "money"/>
    <button type = "submit" name = "submit">Submit</button>
</form>
<?php
if (isset($_POST['submit'])) {
   $nilai = $_POST['money'];

   for ($i=0; $i < $nilai; $i++) { 
    echo "Its Money baby<br>";
   }
}
?>