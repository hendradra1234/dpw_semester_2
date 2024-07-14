<?php
    if (isset($_POST['press'])) {
        $saran = nl2br($_POST['saran']);
        echo "<p>Kritik dan Saran Anda</p>";
        echo "<font color = blue>$saran</font>";
    }
?>