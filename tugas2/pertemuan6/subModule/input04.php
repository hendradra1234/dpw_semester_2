<html>
    <head>
        <title> Pengolahan Form - Text</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <h1>Program 4.6</h1>
        <form action="proses/proses04.php" method="POST" name="input">
            <label>Sahabat dekatku</label>
            <div  class = "form-group">
                <input type="text" name="nama1" placeholder = "Masukkan nama Sahabat 1"><br>
            </div>
            <div  class = "form-group">
                <input type="text" name="nama2" placeholder = "Masukkan nama Sahabat 2"><br>
            </div>
            <div  class = "form-group">
                <input type="text" name="nama3" placeholder = "Masukkan nama Sahabat 3"><br>
            </div>
            <div  class = "form-group">
                <input type="text" name="nama4" placeholder = "Masukkan nama Sahabat 4"><br>
            </div>
            <button type="submit" name="input">Submit</button>
        </form>
    </body>
</html>