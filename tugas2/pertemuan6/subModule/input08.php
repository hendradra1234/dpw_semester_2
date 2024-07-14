<html>
    <?php
        $val = array("Sponge Bob", "Sinchan", "Conan", "Doraemon", "Dragon Ball", "Naruto");

        function show_option($values) {
            for ($i=0; $i < count($values); $i++) {
                echo "<option value='$values[$i]'>$values[$i]</option>";
            }
        }
    ?>
    <head>
        <title>Film Kartun Favorite - Inputan Combo Box</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <h1>Program 4.14</h1>
        <form action = "proses/proses08.php" method = "POST" name = "input">
            <h2>Pilih Kartun Favorit</h2>
            <select placeholder = "Pilih Anime" name="kartun">
                <?php
                    show_option($val);
                ?>
            </select>
            <button type = "submit" name = "pilih">Submit</button>
        </form>
    </body>
</html>