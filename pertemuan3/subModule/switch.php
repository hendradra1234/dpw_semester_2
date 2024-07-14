<h3>Program 3.6</h3>
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