<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function upload()
    {
        return view('payment.upload');
    }

    public function index()
    {
        return view('Admin.payment.index'); //payment.index
    }

    public function verify()
    {
        return view('Admin.payment.verify'); //payment.verify
    }
}
