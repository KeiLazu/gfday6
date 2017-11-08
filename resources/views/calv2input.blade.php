<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Calculator V2</title>
</head>
<body>
    <form action="calv2output" method="POST">
    {{ csrf_field() }}
        First Number:<br>
        <input type="text" name="number1" id="number1" placeholder="Insert Number"/><br>
        Second Number:<br>
        <input type="text" name="number2" id="number2" placeholder="Insert Number"/><br><br>
        {{--  <input type="submit" name="plus" value="+">
        <input type="submit" name="minus" value="-">
        <input type="submit" name="multi" value="*">
        <input type="submit" name="divide" value="/"><br><br>  --}}

        <input type="radio" name="rdOperator" value="+">+<br>
        <input type="radio" name="rdOperator" value="-">-<br>
        <input type="radio" name="rdOperator" value="*">*<br>
        <input type="radio" name="rdOperator" value="/">/<br>

        <input type="submit" name="submit" value="submit">

    </form>

    <br><br><br><input type="button" value="back" onclick="location.href='/'">

</body>
</html>