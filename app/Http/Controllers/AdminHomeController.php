<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    function index()
    {
        return view('home', [
            'active' => 'Home',
        ]);
    }
}
