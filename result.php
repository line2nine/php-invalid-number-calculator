<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'cal.php';
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $cal = $_POST["cal"];
    $result = new Calculator();
    switch ($cal) {
        case "+":
            try {
                echo $result->sum($num1, $num2);
            } catch (Exception $exception){
                echo $exception->getMessage();
            }
            break;
        case "-":
            try {
                echo $result->sub($num1, $num2);
            } catch (Exception $exception){
                echo $exception->getMessage();
            }
            break;
        case "x":
            try {
                echo $result->multi($num1, $num2);
            } catch (Exception $exception){
                echo $exception->getMessage();
            }
            break;
        case "/":
            try {
                echo $result->division($num1, $num2);
            } catch (Exception $exception) {
                echo $exception->getMessage();
            }
    }
}
?>
</body>
</html>