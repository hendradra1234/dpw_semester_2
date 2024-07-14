<h3>Program 5.3</h3>
<?php 
    $arrWarna = array ("Blue","Black","Red","Yellow","Green");
    echo "Menampilkan isi array dengan for : <br>";
    for ($i=1; $i<count($arrWarna); $i++) {
    echo "Do you like <font color=$arrWarna[$i]>". $arrWarna[$i]."</font> ?<br>";
    }
    echo "<br>Menampilkan isi array dengan foreach : <br>";
    foreach ($arrWarna as $warna) {
    echo "Do you like <font color=$warna>". $warna ."</font> ?<br>";
}
?>