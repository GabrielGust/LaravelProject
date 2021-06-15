<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function sum (int $n1, int $n2) 
    {
        $result = $n1 + $n2;
        return view('calculatedresult', ['value1' => $n1, 'operation' => '+', 'value2' => $n2, 'result' => $result]);
    }

    public function subtraction (int $n1, int $n2) 
    {
        $result = $n1 - $n2;
        return view('calculatedresult', ['value1' => $n1, 'operation' => '-', 'value2' => $n2, 'result' => $result]);
    }

    public function division (int $n1, int $n2) 
    {
        $result = $n1 / $n2;
        return view('calculatedresult', ['value1' => $n1, 'operation' => '÷', 'value2' => $n2, 'result' => $result]);
    }

    public function multiplication (int $n1, int $n2) 
    {
        $result = $n1 * $n2;
        return view('calculatedresult', ['value1' => $n1, 'operation' => '×', 'value2' => $n2, 'result' => $result]);
    }
}