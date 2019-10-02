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
        $senaraiUsers = DB::table('users')->get();


        return view('theme_user.template_index', compact('senaraiUsers'));
    }

    public function add()
    {
        return view('theme_user.template_add');
    }

    public function save(Request $request)
    {
        $request->validate([
            'title' => 'required|min:2',
            'email' => 'required|email'
        ]);

        //$data = $request->input('name');
        $data = $request->all();
        // $data = $request->only('name');

        return $data;
    }

    public function profile($username)
    {
        return view('theme_user.template_profile', compact('username'));
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
