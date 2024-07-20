<html>
    <head>
        <title>Latihan Array</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <h3>Latihan Array</h3>
        <?php
        $mahasiswa = array("Diya" => 80, "Hadi"=>90, "Ana"=>75, "Budi"=>85, "Hendra"=>90);
        ?>

        <form  action="" method ="POST" name = "inputform">
            <label>Lihat Nilai Siswa</label>
            <div class = "form-group">
                <input type = "text" name = "Name"/>
            </div>
            <button type = "submit" name = "submit">Submit</button>
        </form>
        <?php
            if (isset($_POST['submit'])) {
                $name = $_POST['Name'];

                if (array_key_exists(ucfirst($name), $mahasiswa)) {
                    $grades = $mahasiswa[ucfirst($name)];
                    echo "Nilai $name Adalah $grades";
                    return;
                }

                echo "Siswa tidak di temukan";
            }
        ?>
    </body>
</html>