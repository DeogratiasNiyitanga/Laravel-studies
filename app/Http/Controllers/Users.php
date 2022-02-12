<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB; Importing db class to allow the accesss to database tables
use App\Models\User; //Importing the model
use Illuminate\Support\Facades\Http; //Usinh http client


class Users extends Controller
{
    public function index($age)
    {
        // echo $age . '<br>';
        // echo "Hello, this is from controller";
        // return a json data 
        return ['name' => 'Deo', 'age' => 25];
    }

    // login data and validation
    public function getLoginData(Request $req)
    {
        $req->validate([
            'username' => 'required | max:10',
            'password' => 'required | min:3'
        ]);

        // Using sessions to login 
        $data = $req->input();
        $req->session()->put('userCred', $data['username']);
        // echo session('userCred');
        return redirect('home');
    }
    //  feching all users fromm db 
    function fetchUsers()
    {
        // using db class 
        // return DB::select("select * from users");

        // using model class 
        return User::all();
    }

    // User api test 
    public function apiuser()
    {
        $collection =  Http::get("https://reqres.in/api/users?page=1");

        return view('userapi', ['collection' => $collection['data']]);
    }
}
