<?php

namespace App\Http\Controllers;

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
}
