<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Calculator V2</title>
    <?php
        if($_POST['rdOperator'] == "+")
        {
            $result = $_POST['number1'] + $_POST['number2'];
        } 
        if ($_POST['rdOperator'] == "-")
        {
            $result = $_POST['number1'] - $_POST['number2'];
        }
        if ($_POST['rdOperator'] == "*")
        {
            $result = $_POST['number1'] * $_POST['number2'];
        }
        if ($_POST['rdOperator'] == "/")
        {
            $result = $_POST['number1'] / $_POST['number2'];
        }
    ?>
</head>
<body>
    <?php
        echo $_POST['number1'];
        echo $_POST['rdOperator'];
        echo $_POST['number2'];
        echo "=";
        echo $result;
    
    ?>
</body>
</html>