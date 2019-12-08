<?php

namespace App\Http\Controllers;

use App\Krajiny;
use Illuminate\Http\Request;

class krajinyController extends Controller
{
    public function getKrajiny(){
        $krajiny = Krajiny::all();
        return view('erasmus') -> with('krajiny', $krajiny);
    }
}
