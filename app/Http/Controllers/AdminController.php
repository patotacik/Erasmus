<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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



    public function showAction($id)
    {
        $user = User::find($id);
        return view("update", ['user' => $user]);
    }

    public function updateAction($id, Request $request)
    {
        $user = \App\Models\User::where("id", "=", $id)->first();
        $user->update(['name' => $request->input('name'),
            'email' => $request->input('Email')]);

        //$user->update(['email' => $request->input('Email')]);

        return redirect()->action('UserController@showAllAction');
    }

    public function getAddUserForm()
    {
        return view('adduser');
    }

    public function AllUsersAction()
    {
        $users = User::all();
        return view("AllUsers", ['users' => $users]);
    }

    public function insertAction(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->roly_id = 3;

        $user->save();

        return response()->view('adduser');
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
