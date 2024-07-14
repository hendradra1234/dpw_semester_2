<h3>Program 5.16</h3>
<?php
    if (function_exists('exif_read_data')) {
        echo "Fungsi exif_read_data() ada di PHP.<br />\n";
    } else {
        echo "Fungsi exif_read_data() tidak ada di PHP.<br />\n";
    }
?>