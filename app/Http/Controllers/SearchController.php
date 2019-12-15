<?php


namespace App\Http\Controllers;


use App\User;

class SearchController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        return view('search');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function autocomplete(Request $request)
    {

        $searchquery = $request->searchquery;
        $data = User::where('name','like','%'.$searchquery.'%')->get();


        return response()->json($data);

    }
}