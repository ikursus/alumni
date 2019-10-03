<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use PDF;

class PrintController extends Controller
{
    public function user(Request $request, $id)
    {
        // Dapatkan profile user
        $user = User::findOrFail($id);

        $pdf = PDF::loadView('cetakan.profile', compact('user'));
        return $pdf->download($id . '-profile.pdf');
    }
}
