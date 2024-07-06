<?php
$nip = "2322510009";
$name = "hendra";
echo "<h3>Program 2.2</h3>";
echo "
NIP : $nip <br>
Name : $name <br>";


echo "<h3>Program 2.3</h3>";
$nip = "2322510009";
$nama = 'Hendra';
$umur = 23;
$status = true;
echo "
NIP : $nip <br>
Nama : $name <br>
umur : $umur <br>";

If ($status)
 echo "Status : Aktif";
else
 echo "Status : Tidak Aktif";

echo "<h3>Program 2.4</h3>";
define ("NAMA", "Hendra");
define ("NILAI",95);
echo "Nama : " . NAMA;
echo "<br> Nilai : " . NILAI;

echo "<h3>Program 2.5</h3>";
$gaji = 2500000;
$pajak = 0.11;

$thp = $gaji - ($gaji*$pajak);

echo "
Gaji Sebelum pajak : $gaji <br>
Gaji Setelah pajak : $thp
"
?>