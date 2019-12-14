<?php

namespace App\Http\Controllers;

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

    public function search(Request $request){
        $search = $request->get('q');

       /* $result = Podujatia::where('Nazov', 'like', '%' .$search. '%')->paginate(6);
        */

        $podujatia = Podujatia::paginate(9)->all();
        $finalResult = [];
        foreach ($podujatia as $podujatie) {
            if(strpos($podujatie->Nazov, $search) !== false || strpos($podujatie->podUni->nazov, $search) !== false
                        || strpos($podujatie->podKraj->name, $search) !== false || strpos($podujatie->podMes->name, $search) !== false) {

                            array_push($finalResult, $podujatie);
            }

        }

        return view('erasmusSearch', compact('search', 'finalResult'));
    }
}
