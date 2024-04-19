<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szelektív hulladék gyűjtés</title>
    <link rel="stylesheet" href="stilus1.css">
</head>
<body>
    <?php
        $szemet = array("papír","babkonzerv","tejes doboz","sörös üveg", "nylon csomagolás");
    ?>
    <form action="#" method="get">
        <label for="szemetem">Kidobandó szemét</label>
        <select name="szemetem" id="szemetem">
            <?php
                foreach ($szemet as $ertek) {
                    echo "<option value='$ertek'>$ertek</option>";
                }
            ?>
        </select>
            <br>
            <input type="image" src="forras/kuka.jpg>" alt="kuka" name="kuka">
    </form>
</body>
</html>