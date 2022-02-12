<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fileUploadController extends Controller
{
    //
    public function uploadFile(Request $req)
    {
        return $req->file('file')->store('Documents');
    }
}
