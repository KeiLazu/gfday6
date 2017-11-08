<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculation extends Controller
{
    function calculate(Request $request)
    {
        // dd(
        // $request->all()
        // );

        $operator = $request->rdOperator;

        switch ($operator) {
            case '+':
                $result = $request->number1 + $request->number2;
                break;

            case '-':
                $result = $request->number1 - $request->number2;
                break;

            case '*':
                $result = $request->number1 * $request->number2;
                break;

            case '/':
                $result = $request->number1 / $request->number2;
                break;

        }

        // dd($result);

        return view('calv3output', compact('result'));

    }
}
