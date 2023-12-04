<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {
       return view('layouts/main');
    }
    function admin()
    {
       return view('layouts/main');
    }
    function penumpang()
    {
       return view('pengguna/main');
    }
}
