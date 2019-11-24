<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Podujatia;

class podujatiaController extends Controller
{
    public function getPodujatia(){
        $podujatia = Podujatia::all();
        return view('erasmus') -> with('podujatia', $podujatia);
    }
}
