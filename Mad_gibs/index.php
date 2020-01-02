<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="index.php" method="get">

        Color: <input type="text" name="color" id="">
        <br>
        Sekiro: <input type="text" name="sekiro" id="">
        <br>
        Genichiro: <input type="text" name="genichiro" id="">
        <br>
        <button type="submit">GOTY</button>
    </form>

    <?php 
        $color = $_GET['color'];
        $sekiro = $_GET['sekiro'];
        $genichiro = $_GET['genichiro'];

        echo "Roses are $color <br>";
        echo "Sekiro is $sekiro <br>";
        echo "Genichiro is $genichiro<br>";
    ?>

</body>

</html>