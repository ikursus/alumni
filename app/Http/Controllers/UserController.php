<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class UserController extends Controller
{
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
        ->select([
            'id',
            'name',
            'email',
            'phone'
        ])
        ->orderBy('id', 'desc')
        // ->latest()
        // ->get();
        ->paginate(2);


        return view('theme_user.template_index', compact('senaraiUsers'));
    }

    public function add()
    {
        $senaraiRace = DB::table('race')
        ->select([
            'id',
            'name'
        ])
        ->get();

        $senaraiReligion = DB::table('religions')
        ->select([
            'id',
            'name'
        ])
        ->get();

        return view('theme_user.template_add', 
        compact(
            'senaraiRace', 
            'senaraiReligion'
        ));
    }

    public function save(Request $request)
    {
        // Validate data dari borang
        $request->validate([
            'title' => 'required|min:2',
            'email' => 'required|email'
        ]);

        // $data = $request->input('name');
        // $data = $request->all();
        $data = $request->only([
            'title_id',
            'name',
            'nric',
            'email',
            'password',
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

        // Berhubung dengan DB dan masukkan data
        DB::table('users')->insert($data);

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
        $page_title = 'Edit User';
        // return view('theme_user.template_edit');
        // return view('theme_user.template_edit', ['id' => $id]);
        // return view('theme_user.template_edit')->with('id', $id);
        return view('theme_user.template_edit', 
        compact('page_title','id'));

    }

    public function update()
    {
        return 'Kemaskini data telah berjaya diterima';
    }


}
