<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        return view('Admin.schedule.index'); // schedule.index
    }

    public function list()
    {
        return view('ServiceProvider.schedule.index'); // schedule.index
    }

    public function show()
    {
        return view('ServiceProvider.schedule.show'); // schedule.show
    }
}
