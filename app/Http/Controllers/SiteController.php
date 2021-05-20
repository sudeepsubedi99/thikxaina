<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('/frontend/index');
    }

    public function show()
    {
        return view('/frontend/show');
    }
    public function home()
    {
        if ( auth()->user()->role == "Admin")
        return redirect('/admin');

        return redirect('/');
    }
}
