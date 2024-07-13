<?php
    if (isset($_POST['proses'])) {
        $saran = ni2br($_POST['saran']);
        echo "<p>Kritik dan Saran Anda</p>";
        echo "<font color = blue>$saran</font>";
    }
?>