<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('layouts.admin.index');
    }

    public function products()
    {
        return view('layouts.admin.products');
    }

    public function users()
    {
        return view('layouts.admin.users');
    }
}
