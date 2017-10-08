<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerReview;

class DigitalSignageController extends Controller
{

    public function index(){

        return response()->view('signage.main')->header('X-Frame-Options', 'ALLOW-FROM https://apps.risevision.com');
    }

    public function feedback(){

        $reviews = CustomerReview::latest()->get(['id','customer_name','review','social_media']);
        return view('signage.feedback')->with('reviews', $reviews);

    }
}
