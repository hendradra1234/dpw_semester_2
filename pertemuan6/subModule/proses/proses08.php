<?php
if (isset($_POST['pilih'])) {
    $film = $_POST['kartun'];
    echo "Film karton favorit anda:
    <font color=blue><b>$film</b></font>
    ";
}
?>