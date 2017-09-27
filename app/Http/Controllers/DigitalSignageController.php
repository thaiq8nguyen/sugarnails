<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DigitalSignageController extends Controller
{
    public function index(){



        return view('signage.main');
    }
}
