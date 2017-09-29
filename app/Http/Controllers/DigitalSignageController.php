<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DigitalSignageController extends Controller
{
    public function index(){



        return response()->view('signage.main')->header('X-Frame-Options', 'ALLOW-FROM *');
    }
}
