<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator V3</title>
</head>
<body>
     
     {!! Form::open(['route' => 'calculation'])!!}
     {{--  <form action="calv3output" method="POST">  --}}
        {{ csrf_field() }}
        First Number:<br>
        <input type="text" name="number1" id="number1" placeholder="Insert Number"/><br>
        Second Number:<br>
        <input type="text" name="number2" id="number2" placeholder="Insert Number"/><br><br>

        <input type="radio" name="rdOperator" value="+">+<br>
        <input type="radio" name="rdOperator" value="-">-<br>
        <input type="radio" name="rdOperator" value="*">*<br>
        <input type="radio" name="rdOperator" value="/">/<br>

        <input type="submit" name="submit" value="submit">
    
    {!! Form::close() !!}
    {{--  </Form>  --}}

    <br><br><br><input type="button" value="back" onclick="location.href='/'">
    
</body>
</html>