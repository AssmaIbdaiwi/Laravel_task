<?php

namespace App\Http\Controllers;

use App\Models\Calculator;

use Illuminate\Http\Request;
use Symfony\Component\Translation\Catalogue\OperationInterface;

class CalculatorController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     *  \Illuminate\Http\Response
    
     */
    public function add(Request $request)
    {
        $results=0;
        $firstnumber = $request->input('firstnumber');
        $secondnumber = $request->input('secondnumber');

        if ($request->input('Math') == "add") {
            $results = $firstnumber + $secondnumber;
        } elseif ($request->input('Math') == "sub") {
            $results = $firstnumber - $secondnumber;
        } elseif ($request->input('Math') == "mult") {
            $results = $firstnumber * $secondnumber;
        }else{
            $results = $firstnumber / $secondnumber;
        }

        return view("calculatortask.calculator", compact('results'));
    }
    // public function sub(Request $request)
    // {
    //    $firstnumber= $request->input('firstnumber');
    //    $secondnumber= $request->input('secondnumber');


    // $results=$firstnumber-$secondnumber;

    // return view("calculatortask.calculator",compact('results'));







}
