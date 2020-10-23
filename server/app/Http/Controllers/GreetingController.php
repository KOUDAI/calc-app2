<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function show($greet)
    {
        
        
        
        switch ($greet) 
        {
            case 'morning':
                $greet = 'おはようございます';
                // $kodai =$num1 + $num2;
            break;

            case 'afternoon':
                // $kodai =$num1 - $num2;
                $greet = 'こんにちは';
            break;

            case 'evening':
                // $kodai =$num1 * $num2;
                $greet = 'こんばんは';
            break;

            case 'night':
        // $kodai =$num1 / $num2;
                $greet = 'おやすみ';
            break;
    
        default:
        echo  'koudai';
        break;
        }
        return view('views.show', ['greet'=> $greet]);
    }
}
