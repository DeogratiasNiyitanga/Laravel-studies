<?php

namespace App\Http\Controllers;

use App\Models\Member;

use Illuminate\Http\Request;

class SaveDataToDbController extends Controller
{
    //
    public function saveData(Request $req)
    {
        $member = new Member;
        $member->fname = $req->fname;
        $member->lname = $req->lname;
        $member->email = $req->email;
        $member->phone = $req->phone;

        $member->save();
        return redirect('savememberform');

        // return $req->input();
    }
}
