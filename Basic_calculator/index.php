<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="index.php" method="$_GET">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
        <button type="submit">Calculate</button>
    </form>

    Result: <?php echo $_GET['num1'] + $_GET['num2']; ?>

</body>

</html>