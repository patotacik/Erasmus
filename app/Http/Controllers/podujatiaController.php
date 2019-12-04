<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Podujatia;

class podujatiaController extends Controller
{
    public function getPodujatia(){
        $podujatia = Podujatia::latest()->paginate(2);
        return view('erasmus') -> with('podujatia', $podujatia)
        ->with('i', (request()->input('page', 1) - 1) * 2);

    }

}
