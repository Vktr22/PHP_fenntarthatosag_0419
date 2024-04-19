<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilus1.css">
    <title>Víz védelme</title>
</head>
<body>
    <form action="vizBackend.php" method="post">
        <label for="v">A folyadékáram sebessége</label>
        <input type="number" name="sebesseg" id="v" value="1" min="0">
        <br>
        <label for="A">A folyadékáram keresztmetszete (m2):</label>
        <input type="number" name="keresztMetszet" id="A" value="1" min="0">
        <input type="submit" value="Számol" name="szamol">
    </form>
</body>
</html>