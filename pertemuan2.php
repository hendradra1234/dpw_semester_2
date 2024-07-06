<h1>Pertemuan 2</h1>
<h2>Struktur dasar PHP</h2>

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

$thp = $gaji - $pajak;
$pajak = ($gaji*$pajak);
echo "
Gaji Sebelum pajak : Rp $gaji <br>
pajak : Rp $pajak <br>
Gaji Setelah pajak : Rp $thp <br>
";

echo "<h3>Program 2.6</h3>";
$a = 5;
$b = 4;
echo "$a == $b : ". ($a == $b);
echo "<br>$a != $b : ". ($a != $b);
echo "<br>$a > $b : ". ($a > $b);
echo "<br>$a < $b : ". ($a < $b);
echo "<br>($a == $b) && ($a > $b) : ". (($a != $b) && ($a > $b));
echo "<br>($a == $b) || ($a > $b) : ". (($a != $b) || ($a > $b));

echo "<h3>Program 2.7</h3>";
echo "Komentar tidak akan di tampilkan, buka kode untuk melihat komentar<br>";
// Komentar pada PHP (Komentar single line)
# ini juga Komentar single line
/*
 ini komentar multi-line
*/

?>