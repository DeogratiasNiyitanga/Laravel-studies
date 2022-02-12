<?php

namespace App\Http\Controllers;

use App\Models\Member;

use Illuminate\Http\Request;

class memberListFromDb extends Controller
{
    //
    public function showMembers()
    {
        $data = Member::paginate(2);
        return view('membersfromdb', ['members' => $data]);
    }

    public function deleteMember($me_id)
    {
        $data = Member::find($me_id);
        $data->delete();
        return redirect('memberlistfromdb');
    }
}
