<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutSalonController extends Controller
{
    public function index()
    {
        return view('about');
    }
}
