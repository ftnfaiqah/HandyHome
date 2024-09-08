<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('Admin.service.index');
    }

    
    public function create()
    {
        return view('Admin.service.create');
    }

    public function show()
    {
        return view('Admin.service.show');
    }

    public function edit()
    {
        return view('Admin.service.edit');
    }
}
