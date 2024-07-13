<h1>Program 4.1</h1>
<html>
    <head><title> Pengolahan Form</title></head>
    <body>
    <form action="input01.php" method="POST" name="input">
        <label>Nama Anda</label>
        <div class = "form-group">
            <input type="text" name="nama" placeholder = "Masukkan nama anda"/>
        </div>
        <button type="submit" name="Input" value="Input">Submit</button>
    </form>
    </body>
</html>
<?php
    if (isset($_POST["Input"])) {
        $nama= $_POST["nama"];
        echo "Nama Anda : <b>$nama</b>";
    }
?>