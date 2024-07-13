<head>
	<title>Latihan Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class = "content">
        <h3>Latihan Form</h3>

        <form  action="" method ="POST" name = "inputform">
            <div class = "card-body">
                <div class = "form-group">
                    <label>NIM</label>
                    <input type = "number" name = "nim"/>
                </div>
                <div class = "form-group">
                    <label>Nama</label>
                    <input type = "text" name = "name"/>
                </div>
                <div class = "form-group">
                    <label>Nilai</label>
                    <input type = "number" name = "grades"/>
                </div>
                <button type = "submit" name = "submit">Submit</button>
            </div>
        </form>
    </div>
</body>
<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $nim = $_POST['nim'];
    $nilai = $_POST['grades'];

    echo "
    <p>
        Name: $name<br>
        NIM: $nim<br>
        Nilai: $nilai<br>
    </p>
    ";

    if ($nilai > 60) {
        echo "<p>Anda lulus, nilai anda $nilai</p>";
        return;
    }
    echo "<p>Anda Tidak lulus, nilai anda $nilai</p>";
}
?>