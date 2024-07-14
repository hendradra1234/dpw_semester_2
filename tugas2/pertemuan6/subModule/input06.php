<html>
    <head>
        <title> Pilih Jurusan</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <h1>Program 4.10</h1>
        <form action="proses/proses06.php" method="POST" name="input">
            <h2>Pilih Jurusan Anda : </h2>
            <div class = "form-group">
                <input type="radio" name="jurusan" value="TI" checked>Teknik Informatika
            </div>
            <div class = "form-group">
                <input type="radio" name="jurusan" value="SI"> Sistem Informasi
            </div>
            <div class = "form-group">
                <input type="radio" name="jurusan" value="SK">Sistem Komputer
            </div>
            <div class = "form-group">
                <input type="radio" name="jurusan" value="KA">Komputerisasi Akuntansi
            </div>
            <div class = "form-group">
                <button type="submit" name="Pilih">Pilih</button>
            </div>
        </form>
    </body>
</html>