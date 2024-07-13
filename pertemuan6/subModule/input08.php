<h1>Program 4.14</h1>
<?php
    function render_option($values) {
        for ($i=0; $i < count($values); $i++) { 
            echo "<option value="$values[$i]">$values[$i]</option>";
        }
    }
?>
<html>
    <head>
        <title>Film Kartun Favorite - Inputan Combo Box</title>
    </head>
    <form action = "proses/proses08.php" method = "POST" name = "input">
        <h2>Pilih Kartun Favorit</h2>
        <select placeholder = "Pilih Anime" name="kartun">
            <?php
                $values = array("Sponge Bob", "Sinchan", "Conan", "Doraemon", "Dragon Ball", "Naruto")
                render_option($values);
            ?>
        </select>
        <button type = "submit" name = "pilih">Submit</button>
    </form>
</html>