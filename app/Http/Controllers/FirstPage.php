<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstPage extends Controller
{
    public function View()
    {
        return view('firstpage');
    }
}