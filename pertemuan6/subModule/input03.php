<html>
    <head>
        <title> Pengolahan Form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <h1>Program 4.4</h1>
        <form action="proses/proses03.php" METHOD="GET" NAME="input">
            <div  class = "form-group">
                <label>Nama Anda</label>
                <input type="text" name="nama">
            </div>
            <button type="submit" name="input">Submit</button>
        </form>
    </body>
</html