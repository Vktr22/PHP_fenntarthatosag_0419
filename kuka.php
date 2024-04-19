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
        $szemet = array("papír","babkonzerv","tejes doboz","sörös üveg", "nylon csomagolás", "krumpli héja");
    ?>
    <form action="#" method="get">
        <label for="szemetem">Kidobandó szemét</label>
        <select name="szemetes" id="szemetem">
            <?php
                foreach ($szemet as $ertek) {
                    echo "<option value='$ertek'>$ertek</option>";
                }
            ?>
        </select>
            <br>
            <input type="image" src="forras/kuka.jpg>" alt="kuka" name="kuka">
            <?php
                //var_dump($GET);
                if (isset($_GET["szemetem"])) {
                    $kivSzemet = $_GET["szemetem"];
                    if ($kivSzemet == "papír" || $kivSzemet == "tejes doboz") {
                        echo "Kék színű gyűjtő";
                    }
                    elseif ($kivSzemet == "bab konzerv" || $kivSzemet == "nylon csomagolás"){
                        echo "Sárga színű gyűjtő";
                    }
                    else{
                        echo "Nem színes kuka";
                    }
                }
            ?>
    </form>
</body>
</html>