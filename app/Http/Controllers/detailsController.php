<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Podujatia;

class detailsController extends Controller
{
    public function getErasmusId($id){
        $details = Podujatia::find($id);
        return view('details', ['details' => $details]);
    }
}
