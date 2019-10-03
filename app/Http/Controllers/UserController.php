<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\User;
use App\Race;
use App\Religion;
use App\Title;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        // $senaraiUsers = [
        //     ['id' => '1', 'name' => 'Ali Bin Abu', 'email' => 'ali@abu.com', 'phone' => '0123465897'],
        //     ['id' => '2', 'name' => 'Ahmad Bin Abu', 'email' => 'ahmad@abu.com', 'phone' => '0123465833'],
        //     ['id' => '3', 'name' => 'Siti Nurhaliza', 'email' => 'siti@nurhaliza.com', 'phone' => '0123665897'],
        //     ['id' => '4', 'name' => 'John Doe', 'email' => 'john@doe.com', 'phone' => '0123465877'],
        //     ['id' => '5', 'name' => 'Upin Ipin', 'email' => 'upin@ipin.com', 'phone' => '0123465899']
        // ];
        // $senaraiUsers = DB::table('users')->get();
        // $senaraiUsers = DB::table('users')
        // ->where('email', '=', 'admin@gmail.com')
        // ->where('phone', '0123456789')
        // ->get();
        $senaraiUsers = DB::table('users')
        ->join('race', 'race.id', '=', 'users.race_id')
        ->join('religions', 'religions.id', '=', 'users.religion_id')
        ->select([
            'users.id',
            'users.name',
            'users.email',
            'users.phone',
            'race.name as race_name',
            'religions.name as religion_name'
        ])
        ->paginate(2);

        // dd($senaraiUsers);

        return view('theme_user.template_index', compact('senaraiUsers'));
    }

    public function add()
    {
        $senaraiRace = Race::select([
            'id',
            'name'
        ])
        ->get();

        $senaraiReligion = Religion::select([
            'id',
            'name'
        ])
        ->get();

        $senaraiTitle = Title::select([
            'id',
            'name'
        ])
        ->get();

        return view('theme_user.template_add', 
        compact(
            'senaraiRace', 
            'senaraiReligion', 
            'senaraiTitle'
        ));
    }

    public function save(Request $request)
    {
        // Validate data dari borang
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:3|confirmed'
        ]);

        // $data = $request->input('name');
        // $data = $request->all();
        $data = $request->only([
            'title_id',
            'name',
            'nric',
            'email',
            'gender',
            'dob',
            'phone',
            'address',
            'race_id',
            'religion_id',
            'nationality_id',
            'gambar',
            'status_perkahwinan',
            'role'
        ]);
            
        // Encrypt password
        $data['password'] = bcrypt($request->input('password'));


        // Berhubung dengan DB dan masukkan data
        // DB::table('users')->insert($data);
        $user = User::create($data);
        $user->academics()->create($data_academic);
        $user->pekerjaan()->create($data_pekerjaan);

        // Redirect ke senarai user
        return redirect('/users');
    }

    public function profile($id)
    {
        $user = DB::table('users')
        ->where('id', '=', $id)
        ->first();
        
        // $user = User::find($id);

        return view('theme_user.template_profile', compact('user'));
    }

    public function edit($id)
    {
        $senaraiRace = Race::select([
            'id',
            'name'
        ])
        ->get();

        $senaraiReligion = Religion::select([
            'id',
            'name'
        ])
        ->get();

        $senaraiTitle = Title::select([
            'id',
            'name'
        ])
        ->get();

        $user = DB::table('users')
        ->where('id', '=', $id)
        ->first();

        return view('theme_user.template_edit', 
        compact(
            'user',
            'senaraiRace', 
            'senaraiReligion', 
            'senaraiTitle'
        ));

    }

    public function update(Request $request, $id)
    {

        // Validate data dari borang
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'gambar' => 'mimes:jpeg,bmp,png'
        ]);

        // $data = $request->input('name');
        // $data = $request->all();
        $data = $request->except([
                'password', 
                'gambar',
                'checkbox'
            ]);

        // Encrypt password jika ruangan password diisi
        if (!empty($request->input('password')))
        {
            $data['password'] = bcrypt($request->input('password'));
        }

        // Semak jika ada gambar
        if ($request->hasFile('gambar'))
        {
            /// Dapatkan file gambar
            $gambar = $request->file('gambar');
            $file = $gambar->store('images', 'public');

            // Attach array nama gambar ke $data
            $data['gambar'] = $file;
        }
        
        // Encrypt password jika ruangan password diisi
        if ($request->has('checkbox'))
        {
            $checkbox = $request->input('checkbox');
            $data['checkbox'] = json_encode($checkbox);
        }

        // Berhubung dengan DB dan kemaskini data berdasarkan ID
        $user = User::findOrFail($id);
        $user->update($data);

        // Redirect ke senarai user
        return redirect('/users')->with('sukses_mesej', 'Berjaya kemaskini!');
    }


    public function destroy($id)
    {
        DB::table('users')->where('id', $id)->delete();

        return redirect('/users')->with('sukses_mesej', 'Rekod dihapuskan!');
    }


}
