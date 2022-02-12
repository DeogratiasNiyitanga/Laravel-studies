<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class UserHttpCleintController extends Controller
{
    //
    public function index()
    {
        $collection =  Http::get("https://reqres.in/api/users?page=1");

        return view('userapi', ['collection' => $collection['data']]);
    }
}
