<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Podujatia;

class PagesController extends Controller
{
    public function getKontakt() {
        return view('kontakt');
    }
    public function getIndex() {
        $podujatia = Podujatia::all();
        return view('index') -> with('podujatia', $podujatia);
    }
    public function getErasmus() {
        return view('erasmus');
    }
    public function getLogin() {
        return view('login');
    }
    public function getStaz() {
        return view('staz');
    }

    public function getDetails() {
        return view('details');
    }

    public function getAdmin() {
        return view('master');
    }

}
