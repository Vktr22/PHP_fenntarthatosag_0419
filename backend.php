<?php
    include_once "backend.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

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
    
</body>
</html>