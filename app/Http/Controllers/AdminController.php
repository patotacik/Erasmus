<?php
namespace App\Http\Controllers;
use App\Formular;
use App\Hodnotenie;
use App\Hodnotenies;
use App\Komentar;
use App\univerzity;
use App\Podujatia;
use App\Roly;
use App\Vyzvi;
use Illuminate\Http\Request;
use App\User;
use PDF;
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
    public function vyzva()
    {
        return view('vyzva');
    }
    public function spravy_ucasnikov()
    {
        return view('spravy_ucasnikov');
    }
    public function prid_unv()
    {
        return view('pridanie_unv');
    }
    public function table()
    {
        $rolys = Roly::all();
        $users = User::latest()->paginate(5);
        return view('admin/admin_table', ['users' => $users],['rolys' => $rolys])
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
        $hodnotenies = new Hodnotenie();
        $hodnotenies->Otazka_1 = $request->Otazka_1;
        $hodnotenies->Otazka_2 = $request->Otazka_2;
        $hodnotenies->Otazka_3 = $request->Otazka_3;
        $hodnotenies->Otazka_4 = $request->Otazka_4;
        $hodnotenies->hodnotenie = $request->hodnotenie;
        $hodnotenies->potvrdenie = $request->potvrdenie;
        $hodnotenies->users_id = $request->users_id;
        $hodnotenies->podujatias_id = $request->podujatias_id;
        $hodnotenies->pocitadlo = $request->pocitadlo;

        if($request->obrazok !== null){
            $obrazokNazov =$hodnotenies->users_id . '.' .$hodnotenies->podujatias_id. ' obr-c1.' . $request->file('obrazok')->getClientOriginalExtension();
            $request->file('obrazok')->move( base_path() . '/public/images/', $obrazokNazov);
            $hodnotenies->obrazok = '/images/' . $obrazokNazov;
        } else {
            $hodnotenies->obrazok = " ";
        }

        if($request->obrazok2 !== null){
        $obrazokNazov2 =$hodnotenies->users_id . '.' .$hodnotenies->podujatias_id. ' obr-c2.' . $request->file('obrazok2')->getClientOriginalExtension();
        $request->file('obrazok2')->move(base_path() . '/public/images/', $obrazokNazov2);
        $hodnotenies->obrazok2 = '/images/' . $obrazokNazov2;
        } else {
            $hodnotenies->obrazok2 = " ";
        }

        if($request->obrazok3 !== null){
        $obrazokNazov3 =$hodnotenies->users_id . '.' .$hodnotenies->podujatias_id. ' obr-c3.' . $request->file('obrazok3')->getClientOriginalExtension();
        $request->file('obrazok3')->move(base_path() . '/public/images/', $obrazokNazov3);
        $hodnotenies->obrazok3 ='/images/' . $obrazokNazov3;
        } else {
            $hodnotenies->obrazok3 = " ";
        }

        if($request->ppt !== null){
        $ppt =$hodnotenies->users_id . '.' .$hodnotenies->podujatias_id. '.' . $request->file('ppt')->getClientOriginalExtension();
        $request->file('ppt')->move(base_path() . '/public/images/ppt/', $ppt);
        $hodnotenies->ppt = base_path() . '/public/images/ppt/' . $ppt;
        } else {
            $hodnotenies->ppt = " ";
        }

        if($request->dokument !== null){
        $dokument =$hodnotenies->users_id . '.' .$hodnotenies->podujatias_id. '.' . $request->file('dokument')->getClientOriginalExtension();
        $request->file('dokument')->move(base_path() . '/public/images/dokument/', $dokument);
        $hodnotenies->dokument = base_path() . '/public/images/dokument/' . $dokument;
        } else {
            $hodnotenies->dokument = " ";
        }

        $hodnotenies->save();


        $zmena = Podujatia::find($request->podujatias_id);
        $zmena->confirmed = 1;
        $zmena->save();
        return redirect()->route('blogy');
    }


    public function pridat_komentar(Request $request, $id)
    {

        //potvrdenie  users_id  podujatia_id
        $koment = new Komentar();
        $koment->users_id = $request->users_id;
        $koment->hodnotenies_id = $request->hodnotenies_id;
        $koment->koment = $request->koment;
        $koment->save();
        return redirect()->route('blogy.details',$id);
    }



    public function Eventstable()
    {
        $podujatia = podujatia::latest()->paginate(5);
        $Epod = Podujatia::all();
        return view('admin/admin_EventsTable', ['podujatia' => $podujatia],['Epod' => $Epod])
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function Vyzvitable()
    {
        $vyzvi = vyzvi::latest()->paginate(5);
        return view('admin/admin_VyzviTable', ['vyzvi' => $vyzvi])
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function Univerzitytable()
    {
        $univerzity = univerzity::latest()->paginate(5);
        $Euni = univerzity::all();
        return view('admin/admin_UniverzityTable', ['univerzity' => $univerzity],['Euni' => $Euni])
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function EventStore(Request $request)
    {
        //
        $Epod = Podujatia::all();
        $podujatia = new Podujatia();
        $podujatia->Nazov = $request->Nazov;
        $podujatia->datum = $request->datum;
        $podujatia->mestos_id = $request->mestos_id;
        $podujatia->univerzities_id = $request->univerzities_id;
        $podujatia->krajinies_id = $request->krajinies_id;
        $podujatia->users_id = $request->users_id;
        $podujatia->popis = $request->popis;
        $podujatia->Obrazok = $request->Obrazok;
        $podujatia->confirmed = $request->confirmed;
        $podujatia->save();

        return redirect()->route('AllEvents');
    }

    public function VyzvaStore(Request $request)
    {
        //
        $vyzvi = new Vyzvi();
        $vyzvi->Typ = $request->Typ;
        $vyzvi->detail = $request->detail;
        $vyzvi->nazov_seminara = $request->nazov_seminara;
        $vyzvi->miesto_konania = $request->miesto_konania;
        $vyzvi->cas_konanie = $request->cas_konanie;
        $vyzvi->datum_konania = $request->datum_konania;
        $vyzvi->save();

        return redirect()->route('AllVyzvi');
    }

    public function UniverzityStore(Request $request)
    {
        //
        $univerzity = new univerzity();
        $univerzity->nazov = $request->nazov;
        $univerzity->zaciatok = $request->zaciatok;
        $univerzity->koniec = $request->koniec;
        $univerzity->mestos_id = $request->mestos_id;
        $univerzity->krajinies_id = $request->krajinies_id;
        $univerzity->save();

        return redirect()->route('AllUniverzity');
    }

    public function show($id)
    {
        //
        $user = User::find($id);
        return view('admin/users/show', ['user' => $user]);

    }
    public function EventShow($id)
    {
        //
        $podujatia = podujatia::find($id);
        return view('admin/podujatia/show', ['podujatie' => $podujatia]);

    }

    public function VyzvaShow($id)
    {
        //
        $vyzvi = podujatia::find($id);
        return view('admin/vyzvi/show', ['vyzva' => $vyzvi]);

    }

    public function UniverzityShow($id)
    {
        //
        $univerzity = univerzity::find($id);
        return view('admin/univerzity/show', ['univerzity' => $univerzity]);

    }
    public function edit($id)
    {
        //
        $rolys = Roly::all();
        $user = User::find($id);
        return view('admin/users/edit', ['user' => $user],['rolys' => $rolys]);
    }
    public function EventEdit($id)
    {
        //
        $podujatia = Podujatia::find($id);
        $Epod = Podujatia::all();

        return view('admin/podujatia/edit', ['podujatie' => $podujatia],['Epod' => $Epod]);
    }

    public function VyzvaEdit($id)
    {
        //
        $vyzvi = vyzvi::find($id);

        return view('admin/vyzvi/edit', ['vyzva' => $vyzvi]);
    }
    public function UniverzityEdit($id)
    {
        //
        $univerzity = univerzity::find($id);
        $Euni = univerzity::all();
        return view('admin/univerzity/edit', ['univerzity' => $univerzity],['Euni' => $Euni]);
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
    public function EventUpdate(Request $request, $id)
    {
        $podujatia = podujatia::find($id);
        $podujatia->Nazov = $request->Nazov;
        $podujatia->datum = $request->datum;
        $podujatia->mestos_id = $request->mestos_id;
        $podujatia->univerzities_id = $request->univerzities_id;
        $podujatia->krajinies_id = $request->krajinies_id;
        $podujatia->users_id = $request->users_id;
        $podujatia->popis = $request->popis;
        $podujatia->Obrazok = $request->Obrazok;
        $podujatia->confirmed = $request->confirmed;

        $podujatia->save();

        return redirect()->route('AllEvents');
    }
    public function VyzvaUpdate(Request $request, $id)
    {
        $vyzvi = vyzvi::find($id);
        $vyzvi->Typ = $request->Typ;
        $vyzvi->detail = $request->detail;
        $vyzvi->nazov_seminara = $request->nazov_seminara;
        $vyzvi->miesto_konania = $request->miesto_konania;
        $vyzvi->cas_konanie = $request->cas_konanie;
        $vyzvi->datum_konania = $request->datum_konania;
        $vyzvi->save();

        return redirect()->route('AllVyzvi');
    }
    public function UniverzityUpdate(Request $request, $id)
    {
        $univerzity = univerzity::find($id);
        $univerzity->nazov = $request->nazov;
        $univerzity->zaciatok = $request->zaciatok;
        $univerzity->koniec = $request->koniec;
        $univerzity->krajinies_id = $request->krajinies_id;

        $univerzity->save();

        return redirect()->route('AllUniverzity');
    }
    public function destroy($id)
    {
        //
        $user = User::find($id);
        $user->delete();
        return redirect()->route('AllUsers');
    }
    public function EventDestroy($id)
    {
        //
        $podujatia = podujatia::find($id);
        $podujatia->delete();
        return redirect()->route('AllEvents');
    }
    public function VyzvaDestroy($id)
    {
        //
        $vyzvi = vyzvi::find($id);
        $vyzvi->delete();
        return redirect()->route('AllVyzvi');
    }
    public function UniverzityDestroy($id)
    {
        //
        $univerzity = univerzity::find($id);
        $univerzity->delete();
        return redirect()->route('AllUniverzity');
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


    public function blog()
    {
        $blog = Hodnotenie::latest()->paginate(5);
        return view('blog', ['blog' => $blog])
            ->with('i', (request()->input('page', 1) - 1) * 5);
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
            ->where('confirmed',null)->get();
        return view('u_ziadosti', ['details' => $data]);
    }







    function index()
    {
        $user_data = $this->get_user_data();
        return view('dynamic_pdf')->with('user_data', $user_data);
    }

    function get_user_data()
    {
        $user_data = User::all();
        return $user_data;
    }

    function pdfUser()
    {
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->convert_user_data_to_html());
        return $pdf->stream();
    }

    function convert_user_data_to_html()
    {
        $user_data = $this->get_user_data();
        $output = '
        <h3 align="center">Uživatelia</h3>
        <table width="100%" style="border-collapse: collapse; border: 0px;">
        <tr>
            <th style="border: 1px solid; padding:12px;" width="8%">id</th>
            <th style="border: 1px solid; padding:12px;" width="36%">Meno</th>
            <th style="border: 1px solid; padding:12px;" width="36%">Email</th>
            <th style="border: 1px solid; padding:12px;" width="20%">Rola</th>
        </tr>
     ';
        foreach($user_data as $user)
        {
            $output .= '
            <tr>
            <td style="border: 1px solid; padding:12px;">'.$user->id.'</td>
            <td style="border: 1px solid; padding:12px;">'.$user->name.'</td>
            <td style="border: 1px solid; padding:12px;">'.$user->email.'</td>
            <td style="border: 1px solid; padding:12px;">'.$user->rola_nazov->rola.'</td>
            </tr>
            ';
        }
        $output .= '</table>';
        return $output;
    }

    function get_event_data()
{
    $event_data = Podujatia::all();
    return $event_data;
}

    function pdfEvent()
    {
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->convert_event_data_to_html());
        return $pdf->stream();
    }

    function convert_event_data_to_html()
    {
        $event_data = $this->get_event_data();
        $output = '
        <h3 align="center">Podujatia</h3>
        <table width="100%" style="border-collapse: collapse; border: 0px;">
        <tr>
            <th style="border: 1px solid; padding:12px;" width="4%">id</th>
            <th style="border: 1px solid; padding:12px;" width="16%">Názov</th>
            <th style="border: 1px solid; padding:12px;" width="16%">Dátum</th>
            <th style="border: 1px solid; padding:12px;" width="16%">Mesto</th>
            <th style="border: 1px solid; padding:12px;" width="16%">Univerzita</th>
            <th style="border: 1px solid; padding:12px;" width="16%">Krajina</th>
            <th style="border: 1px solid; padding:12px;" width="16%">Uživatel</th>
        </tr>
        ';
        foreach($event_data as $event)
        {
            $output .= '
      <tr>
        <td style="border: 1px solid; padding:12px;">'.$event->id.'</td>
        <td style="border: 1px solid; padding:12px;">'.$event->Nazov.'</td>
        <td style="border: 1px solid; padding:12px;">'.$event->datum.'</td>
        <td style="border: 1px solid; padding:12px;">'.$event->podMes->name.'</td>
        <td style="border: 1px solid; padding:12px;">'.$event->podUni->nazov.'</td>
        <td style="border: 1px solid; padding:12px;">'.$event->podKraj->name.'</td>
        <td style="border: 1px solid; padding:12px;">'.$event->podUser->name.'</td>
      </tr>
      ';
        }
        $output .= '</table>';
        return $output;
    }

    function get_vyzva_data()
{
    $vyzva_data = vyzvi::all();
    return $vyzva_data;
}

    function pdfVyzva()
    {
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->convert_vyzva_data_to_html());
        return $pdf->stream();
    }

    function convert_vyzva_data_to_html()
    {
        $vyzva_data = $this->get_vyzva_data();
        $output = '
        <h3 align="center">Výzvy</h3>
        <table width="100%" style="border-collapse: collapse; border: 0px;">
        <tr>
            <th style="border: 1px solid; padding:12px;" width="4%">id</th>
            <th style="border: 1px solid; padding:12px;" width="16%">Typ</th>
            <th style="border: 1px solid; padding:12px;" width="16%">Detail</th>
            <th style="border: 1px solid; padding:12px;" width="16%">Názov</th>
            <th style="border: 1px solid; padding:12px;" width="16%">Mesto</th>
            <th style="border: 1px solid; padding:12px;" width="16%">Cas</th>
            <th style="border: 1px solid; padding:12px;" width="16%">Dátum</th>
        </tr>
        ';
        foreach($vyzva_data as $vyzva)
        {
            $output .= '
      <tr>
        <td style="border: 1px solid; padding:12px;">'.$vyzva->id.'</td>
        <td style="border: 1px solid; padding:12px;">'.$vyzva->Typ.'</td>
        <td style="border: 1px solid; padding:12px;">'.$vyzva->detail.'</td>
        <td style="border: 1px solid; padding:12px;">'.$vyzva->nazov_seminara.'</td>
        <td style="border: 1px solid; padding:12px;">'.$vyzva->miesto_konania.'</td>
        <td style="border: 1px solid; padding:12px;">'.$vyzva->cas_konanie.'</td>
        <td style="border: 1px solid; padding:12px;">'.$vyzva->datum_konania.'</td>
      </tr>
      ';
        }
        $output .= '</table>';
        return $output;
    }

    function get_uni_data()
    {
        $uni_data = univerzity::all();
        return $uni_data;
    }

    function pdfUni()
    {
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->convert_uni_data_to_html());
        return $pdf->stream();
    }

    function convert_uni_data_to_html()
    {
        $uni_data = $this->get_uni_data();
        $output = '
        <h3 align="center">Univerzity</h3>
        <table width="100%" style="border-collapse: collapse; border: 0px;">
        <tr>
            <th style="border: 1px solid; padding:12px;" width="4%">id</th>
            <th style="border: 1px solid; padding:12px;" width="16%">Názov</th>
            <th style="border: 1px solid; padding:12px;" width="16%">Zaciatok Spolupráce</th>
            <th style="border: 1px solid; padding:12px;" width="16%">Koniec Spolupráce</th>
            <th style="border: 1px solid; padding:12px;" width="16%">Mesto</th>
            <th style="border: 1px solid; padding:12px;" width="16%">Krajina</th>
        </tr>
        ';
        foreach($uni_data as $uni)
        {
            $output .= '
      <tr>
        <td style="border: 1px solid; padding:12px;">'.$uni->id.'</td>
        <td style="border: 1px solid; padding:12px;">'.$uni->nazov.'</td>
        <td style="border: 1px solid; padding:12px;">'.$uni->zaciatok.'</td>
        <td style="border: 1px solid; padding:12px;">'.$uni->koniec.'</td>
        <td style="border: 1px solid; padding:12px;">'.$uni->podMes->name.'</td>
        <td style="border: 1px solid; padding:12px;">'.$uni->podKraj->name.'</td>
      </tr>
      ';
        }
        $output .= '</table>';
        return $output;
    }
}