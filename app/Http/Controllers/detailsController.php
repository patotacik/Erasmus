<?php

namespace App\Http\Controllers;

use App\Hodnotenie;
use Illuminate\Http\Request;
use App\Podujatia;
use App\Krajiny;
use App\Mesto;
use App\Univerzity;

class detailsController extends Controller
{
    public function getErasmusId($id){

        $pod = Podujatia::find($id);
        $pod->pocitadlo ++;
        $pod->save();
        $details = Podujatia::find($id);
        return view('details') -> with(compact('details', $details));
    }
    public function getBlogId($id){

        $pod = Hodnotenie::find($id);
        $pod->pocitadlo ++;
        $pod->save();
        $blogy_details = Hodnotenie::find($id);
        return view('blogy_details') -> with(compact('blogy_details', $blogy_details));
    }
}
