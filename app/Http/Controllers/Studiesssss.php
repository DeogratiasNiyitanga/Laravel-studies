<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Studies extends Controller
{
    public function studies()
    {
        $users = ['deo', 'Peter', 'Kalisa'];
        return view('study', ['users' => $users]);
    }
}
