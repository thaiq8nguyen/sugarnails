<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DigitalSignageController extends Controller
{

    public function index(){



        return response()->view('signage.main')->headers->set('X-Frame-Options', 'SAMEORIGIN', false);
    }
}
