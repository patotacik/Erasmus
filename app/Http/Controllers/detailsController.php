<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Podujatia;

class detailsController extends Controller
{


    public function getPatvdeneId($id){
        $data = Podujatia::where('users_id','like','%'.$id.'%')->get();

        return view('u_ziadosti', ['details' => $data]);
    }

    public function getErasmusId($id){
        $details = Podujatia::find($id);
        return view('details', ['details' => $details]);
    }
}
