<?php
if (isset($_POST['Pilih'])) {
    $film = $_POST['Kartun'];
    echo "Film karton favorit anda:
    <font color=blue><b>$film</b></font>
    ";
}
?>