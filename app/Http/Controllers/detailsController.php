<?php

namespace App\Http\Controllers;

use App\Hodnotenie;
use App\Komentar;
use App\Vyzvy;
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
        $komentars = Komentar::where('hodnotenies_id', 'like', '%' . $id . '%')->get();
        $pod = Hodnotenie::find($id);
        $pod->pocitadlo ++;
        $pod->save();
        $blogy_details = Hodnotenie::find($id);
        return view('blogy_details',['blogy_details' => $blogy_details],['komentars' => $komentars]);
    }
    public function getSeminarId($id){
        $seminar_details = Vyzvy::find($id);
        return view('seminar_details') -> with(compact('seminar_details', $seminar_details));
    }
}
