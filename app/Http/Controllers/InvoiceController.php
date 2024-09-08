<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function show()
    {
        return view('invoice.show'); //homeowner view invoice
    }

    public function index()
    {
        return view('Admin.invoice.index');
    }

    public function view()
    {
        return view('Admin.invoice.show'); //admin view invoice
    }

    public function create()
    {
        return view('Admin.invoice.create'); //admin create invoice
    }
}
