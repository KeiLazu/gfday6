<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contCalculator extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        function opPlus(Request $request)
        {
            $number1 = $request->number1;
            $number2 = $request->number2;
            $operator = $request->rdOperator;
    
            switch ($operator) {
                case '+':
                    $result = $number1 + $number2;
                    break;
                
                case '-':
                    $result = $number1 - $number2;
                    break;
    
                case '*':
                    $result = $number1 * $number2;
                    break;
    
                case '/':
                    $result = $number1 / $number2;
                    break;
    
                default:
                    
                    break;
            }
    
            return view('calv3output', compact('$result'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
