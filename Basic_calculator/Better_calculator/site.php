<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="site.php" method="post">
        Enter number 1                    <input type="text" name="num1" id=""> <br>
        Operator "+, -, *, /":            <input type="text" name="op" id="">   <br>
        Enter number 2                    <input type="text" name="num2" id=""> <br>
        <button type="submit">Calculate</button>
    </form>

    <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op   = $_POST["op"];

        if ($op == "+") {
            echo $num1 + $num2;

        } elseif ($op == "-") {
            echo $num1 - $num2;

        } elseif ($op == "*") {
            echo $num1 * $num2;

        } elseif ($op == "/") {
            echo $num1 / $num2;
        } else {
            echo "Invalid operator sign";
        }

    ?>

</body>

</html>