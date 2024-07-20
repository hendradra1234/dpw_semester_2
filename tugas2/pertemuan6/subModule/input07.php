<html>
    <head>
        <title> Band Favorit - Inputan Checkbox</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <h1>Program 4.13</h1>
        <form action="proses/proses07.php" method="POST" name="input">
            <h2>Pilih Band Fovorit Anda : </h2>
            <div class = "form-group">
                <input type="checkbox" name="band01" value="Padi" checked>Padi
            </div>
            <div class = "form-group">
                <input type="checkbox" name="band02" value="Sheila On 7">Sheila on 7
            </div>
            <div class = "form-group">
                <input type="checkbox" name="band03" value="Dewa 19">Dewa 19
            </div>
            <div class = "form-group">
                <input type="checkbox" name="band04" value="Ungu">Ungu
            </div>
            <div class = "form-group">
                <input type="submit" name="Pilih" value="Pilih">
            </div>
        </form>
    </body>
</html>