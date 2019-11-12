<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function admin()
    {
        return view('admin');
    }
    public function referent()
    {
        return view('referent');
    }
    public function ucasnik()
    {
        return view('blog');
    }
    public function ucasnik_inf_sem()
    {
        return view('info_seminare');
    }
}
