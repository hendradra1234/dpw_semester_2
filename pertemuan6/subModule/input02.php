<html>
    <head>
        <title>Pengolahan Form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <h1>Program 4.2</h1>
        <form action = "proses/proses02.php" method = "POST" name = "input">
            <label>Nama Anda</label>
            <div class = "form-group">
                <input type = "text" placeholder = "Masukkan Nama" name = "nama">
            </div>
            <button name = "input" type = "submit" >Submit</button>
        </form>
    </body>
</html>