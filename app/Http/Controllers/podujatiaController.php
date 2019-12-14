<?php

namespace App\Http\Controllers;

use App\Vyzvy;
use Illuminate\Http\Request;
use App\Podujatia;
use App\Krajiny;
use App\Mesto;
use App\Univerzity;

class podujatiaController extends Controller
{
    public function getPodujatia(){
        $podujatia = Podujatia::latest()->paginate(6);
        return view('erasmus') -> with(compact('podujatia', $podujatia))
        ->with('i', (request()->input('page', 1) - 1) * 2);
    }


    public function getSeminar(){
        $seminar = Vyzvy::latest()->paginate(6);
        return view('seminar') -> with(compact('seminar', $seminar))
            ->with('i', (request()->input('page', 1) - 1) * 2);
    }

}
