<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcsController2 extends Controller

{
    public function show($num1 , $operator, $num2)
    {
        
        
        
        switch ($operator) 
        {
            case 'addition':
                $kodai =$num1 + $num2;
                break;

            case 'subtraction':
                $kodai =$num1 - $num2;
                break;

            case 'multiplication':
                $kodai =$num1 * $num2;
                break;

            case 'division':
                $kodai =$num1 / $num2;
                break;
            
            default: 
                $kodai =  '正しい値を入れてください｡';
        break;
    }
    return view('calcs.show', ['kodai' => $kodai]);
    }
}