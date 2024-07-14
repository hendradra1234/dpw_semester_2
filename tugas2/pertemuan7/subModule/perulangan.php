
<html>
    <head>
        <title>Latihan Perulangan</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <h3>Latihan Perulangan</h3>

        <form  action="" method ="POST" name = "inputform">
            <label>Input Jumlah Uang</label>
            <div class = "form-input">
                <input type = "number" name = "money"/>
            </div>
            <button type = "submit" name = "submit-normal">Submit Normal Loop</button>
            <button type = "submit" name = "submit-shuffle">Submit Shuffle Loop</button>
        </form>
        <?php
            if (isset($_POST['submit-normal'])) {
                $nilai = $_POST['money'];

                for ($i=0; $i < $nilai; $i++) { 
                    echo "Its Money baby<br>";
                }
            }

            if (isset($_POST['submit-shuffle'])) {
                $nilai = $_POST['money'];

                for ($i=0; $i < $nilai; $i++) {
                    if ($i % 2 == 0) {
                        echo "Pangkalpinang<br>";
                        continue;
                    }
                    echo "Bangka Belitung<br>";
                }
            }
        ?>
    </body>
</html>