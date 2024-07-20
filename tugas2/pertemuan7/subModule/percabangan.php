<html>
    <head>
        <title>Latihan Percabangan</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <h3>Latihan Percabangan</h3>

    <form  action="" method ="POST" name = "inputform">
        <label>Input Nilai Anda</label>
        <div class = "form-group">
            <input type = "number" name = "grades"/>
        </div>
        <button type = "submit" name = "submit">Submit</button>
    </form>

    <?php
        if (isset($_POST['submit'])) {
            $nilai = $_POST['grades'];

            if ($nilai < 0) {
                echo "<p>nilai $nilai tidak valid, nilai harus di atas 0</p>";
            }
            elseif ($nilai > 100) {
                echo "<p>nilai $nilai tidak valid, nilai maksimal 100</p>";
            }
            elseif ($nilai > 60) {
                echo "<p>Selamat Anda lulus, nilai anda $nilai</p>";
            } else {
                echo "<p>Anda Tidak lulus, nilai anda $nilai</p>";
            }
        }
    ?>
    </body>
</html>