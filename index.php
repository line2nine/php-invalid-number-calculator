<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Calculator</title>
</head>
<body>
<div id="content">
    <form method="post" action="result.php">
        <div id="data">
            <label>First Operand:</label>
            <input type="text" name="num1"/><br/>
            <label>Operator:</label>
            <select id="operator" name="cal">
                <option>+</option>
                <option>-</option>
                <option>x</option>
                <option>/</option>
            </select><br/>
            <label>Second Operand:</label>
            <input type="text" name="num2"/><br/>
        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"/>
        </div>
    </form>
</div>
</body>
</html>