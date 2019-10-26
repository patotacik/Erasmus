<?php


namespace App\Http\Controllers;


class PagesController extends Controller
{
    public function getKontakt() {
        return view('kontakt');
    }
    public function getIndex() {
        return view('index');
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

    public function getAdmin() {
        return view('master');
    }
}
