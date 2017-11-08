<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8"/>
    <title>Laravel Caltulator</title>
    <script type="text/javascript">
        function proAddition() {
            keiFirstNumber = parseFloat(document.getElementById('number1').value) || 0;
            keiSecondNumber = parseFloat(document.getElementById('number2').value) || 0;

            keiResult = keiFirstNumber + keiSecondNumber;
            document.getElementById('result').innerHTML = keiResult;
        }

        function proMinus() {
            keiFirstNumber = parseFloat(document.getElementById('number1').value) || 0;
            keiSecondNumber = parseFloat(document.getElementById('number2').value) || 0;

            keiResult = keiFirstNumber - keiSecondNumber;
            document.getElementById('result').innerHTML = keiResult;
        }

        function proMulti() {
            keiFirstNumber = parseFloat(document.getElementById('number1').value) || 0;
            keiSecondNumber = parseFloat(document.getElementById('number2').value) || 0;

            keiResult = keiFirstNumber * keiSecondNumber;
            document.getElementById('result').innerHTML = keiResult;
        }

        function proDiv() {
            keiFirstNumber = parseFloat(document.getElementById('number1').value) || 0;
            keiSecondNumber = parseFloat(document.getElementById('number2').value) || 0;

            keiResult = keiFirstNumber / keiSecondNumber;
            document.getElementById('result').innerHTML = keiResult;
        }

    </script>
</head>
<body>
    First Number:<br>
    <input type="text" name="number1" id="number1" placeholder="Insert Number"/><br>
    Second Number:<br>
    <input type="text" name="number2" id="number2" placeholder="Insert Number"/><br><br>
    <input type="button" name="plus" value="+" onclick="proAddition()"/>
    <input type="button" name="minus" value="-" onclick="proMinus()">
    <input type="button" name="multiple" value="*" onclick="proMulti()">
    <input type="button" name="divide" value="/" onclick="proDiv()"><br><br>
    <div id="result"></div><br><br><br>
    <input type="button" name="back" value="Back" onclick="location.href='/hello'"/>
</body>
</html>