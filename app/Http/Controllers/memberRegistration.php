<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class memberRegistration extends Controller
{
    //
    public function addMember(Request $req)
    {
        $data = $req->input('username');
        $req->session()->flash('userCred', $data);
        return redirect('membergeg');
    }
}
