
    <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColcsController extends Controller
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
    echo  'koudai';
    break;
    }
    return view('views.show', ['kodai'=> $kodai]);
    }
}
