<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function motor()
    {
        return view('main.motor');
    }

    public function inputmotor()
    {
        return view('main.inputmotor');
    }

    public function mobil()
    {
        return view('main.mobil');
    }

    public function inputmobil()
    {
        return view('main.inputmobil');
    }
}
