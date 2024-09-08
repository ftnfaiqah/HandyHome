<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create()
    {
        return view('booking/create');
    }

    public function index()
    {
        return view('booking/index');
    }

    public function show()
    {
        return view('booking/show');
    }

    public function edit()
    {
        return view('booking/edit');
    }

    public function list()
    {
        return view('ServiceProvider.booking.index'); //booking.index
    }

    public function view()
    {
        return view('ServiceProvider.booking.show'); //booking.show
    }
}
