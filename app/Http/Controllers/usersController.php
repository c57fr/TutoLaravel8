<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller
{
    //
    function loadView($name) {
        return view('users', ['name'=>'momo']);
    }
}
