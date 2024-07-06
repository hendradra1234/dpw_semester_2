<h1>Pertemuan 3</h1>
<h2>Struktur Kondisi</h2>

<h3>Program 3.1</h3>
<?php
$nilai = 80;
if ($nilai >= 60) {
    echo "Nilai anda $nilai, Anda Lulus<br>";
}
?>

<h3>Program 3.2</h3>
<?php
$nilai = 50;
if ($nilai >= 60) {
    echo "Nilai Anda, $nilai, Anda lulus<br>";
} else {
    echo "Nilai Anda, $nilai, Anda gagal<br>";
}
?>

<h3>Program 3.3</h3>
<?php
$user = "Hendra";
$pass = "ccmssaa";

if ($user == 'Hendra' && $pass == "ccmssaa") {
    echo "Login Sukes<br>";
} else {
    echo "Login Gagal<br>";
}
?>

<h3>Program 3.4</h3>
<?php
$user = "";
if (!isset($user)) {
    echo "Variable kosong<br>";
} else {
    echo "variable ada<br>";
}
?>

<h3>Program 3.5</h3>
<?php
$harga = 50000;
if ($harga >= 50000) {
    echo "Selamat Anda Mendapat diskon 20%<br>";
} elseif ($harga >= 30000) {
    echo "Selamat anda Mendapat diskon 10%<br>";
} else {
    echo "Terima kasih telah berbelanja, mohon maaf anda tidak medapatkand diskon<br>";
}
?>

<h3>Program 3.5</h3>
<?php
$day = date ('D');

switch ($day) {
    case 'Sun':
        $hari = "Minggu<br>";
    break;
    case 'Mon':
        $hari = "Senin<br>";
    break;
    case 'Tue':
        $hari = "Selasa<br>";
    break;
    case 'Wed':
        $hari = "Rabu<br>";
    break;
    case 'Thu':
        $hari = "Kamis<br>";
    break;
    case 'Fri':
        $hari = "Jum'at<br>";
    break;
    case 'Sat':
        $hari = "Sabtu<br>";
    break;
    default:
        $hari = "Belum Gajian, Program ngambek<br>";
        break;
}

echo "Hari ini Hari, $hari";
?>

<h3>Program 3.6</h3>
<?php
$tahun = date ('Y');
$kabisat = ($tahun%4 == 0) ? "KABISAT" : "Bukan Kabisat";
echo "Tahun <b>$tahun</b> $kabisat<br>";
?>