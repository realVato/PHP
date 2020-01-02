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
        <input type="text" name="username">
        <br>
        <input type="number" name="age">
        <br>
        <button type="submit">submit</button>
    </form>


    Your name: <?php echo $_GET['username'] ?>
    <br>
    Your age: <?php echo $_GET['age'] ?>
</body>

</html>