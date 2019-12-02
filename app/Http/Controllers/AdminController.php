<?php

namespace App\Http\Controllers;

use App\Formular;
use App\Hodnotenies;
use App\Podujatia;
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
        return view('admin/admin');
    }

    public function table()
    {
        $users = User::latest()->paginate(5);
        return view('admin/admin_table', ['users' => $users])
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }


    public function mySearch(Request $request)
    {
        if($request->has('search')){
            $users = User::search($request->get('search'))->get();
        }else{
            $users = User::get();
        }


        return view('admin/admin_table', compact('users'));
    }




    public function create()
    {
        //
        return view('users.create');
    }
    public function store(Request $request)
    {
        //
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request['password']);
        $user->roly_id = $request->roly_id;
        $user->save();

        return redirect()->route('AllUsers');
    }

    public function pridat(Request $request)
    {

        //potvrdenie  users_id  podujatia_id
        $hodnotenies = new Hodnotenies();
        $hodnotenies->Otazka_1 = $request->Otazka_1;
        $hodnotenies->Otazka_2 = $request->Otazka_2;
        $hodnotenies->Otazka_3 = $request->Otazka_3;
        $hodnotenies->Otazka_4 = $request->Otazka_4;
        $hodnotenies->Otazka_4 = $request->Otazka_4;
        $hodnotenies->Otazka_4 = $request->Otazka_4;
        $hodnotenies->hodnotenie = $request->hodnotenie;
        $hodnotenies->potvrdenie = $request->potvrdenie;
        $hodnotenies->users_id = $request->users_id;
        $hodnotenies->podujatia_id = $request->podujatia_id;
        $hodnotenies->save();


        $zmena = Podujatia::find($request->podujatia_id);
        $zmena->confirmed = 1;
        $zmena->save();

        return redirect()->route('ucasnik');
    }



    public function show($id)
    {
        //
        $user = User::find($id);
        return view('admin/users/show', ['user' => $user]);

    }
    public function edit($id)
    {
        //
        $user = User::find($id);
        return view('admin/users/edit', ['user' => $user]);
    }
    public function update(Request $request, $id)
    {
        //
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->roly_id = $request->roly_id;
        $user->save();
        return redirect()->route('AllUsers');
    }
    public function destroy($id)
    {
        //
        $user = User::find($id);
        $user->delete();
        return redirect()->route('AllUsers');
    }
/*
    public function showAction($id)
    {
        $users = User::find($id);
        return view("admin/edit", ['user' => $users]);
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
        return view('admin/admin_table');
    }

    public function AllUsersAction()
    {
        $users = User::all();
        return view("admin/admin_table", ['users' => $users]);
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

        return response()->view('admin/admin_table');
    }
*/

    public function insertAction(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = bcrypt($request->input['password']);

        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->roly_id = 3;

        $user->save();

        return response()->view('admin/admin_table');
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
    public function ziadosti()
    {
        return view('u_ziadosti');
    }
    public function formular($id)
    {
        $user = Podujatia::find($id);
        return view('formular', ['details' => $user]);
    }

    public function getPatvdeneId($id)
    {
        $data = Podujatia::where('users_id', 'like', '%' . $id . '%')
           ->where('confirmed',0)->get();
            return view('u_ziadosti', ['details' => $data]);



    }
}
