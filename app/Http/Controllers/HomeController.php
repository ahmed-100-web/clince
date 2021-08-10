<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $role=Auth::user()->role;
        if($role=='ADM')
        {
           return view('Adm.dashboard');
        }
        else
        {
            return view('User.dashboard');
        }
    }
}
