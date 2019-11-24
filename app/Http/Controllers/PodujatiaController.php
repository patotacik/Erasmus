<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Podujatia;

class PodujatiaController extends Controller
{
    public function getPodujatia(){
        $podujatias = Podujatia::all();

        return view('erasmus',compact('podujatias'));
    }
}