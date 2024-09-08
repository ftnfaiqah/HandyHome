<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuotationController extends Controller
{
    public function show()
    {
        return view('quotation.show');
    }

    public function index()
    {
        return view('Admin.quotation.index'); //use index in general folder
    }

    public function notify()
    {
        return view('Admin.quotation.show'); //in quotation.show
    }

    public function list()
    {
        return view('ServiceProvider.quotation.index'); //in quotation.index
    }

    public function view()
    {
        return view('ServiceProvider.quotation.show'); //in quotation.show
    }

    public function create()
    {
        return view('ServiceProvider.quotation.create'); //in quotation.create
    }

    public function edit()
    {
        return view('ServiceProvider.quotation.edit'); //in quotation.edit
    }
}
