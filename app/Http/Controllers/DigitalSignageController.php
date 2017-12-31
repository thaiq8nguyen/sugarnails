<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerReview;

class DigitalSignageController extends Controller
{



    public function feedback(){

        $reviews = CustomerReview::latest()->get(['id','customer_name','review','social_media']);
        return view('signage.feedback')->with('reviews', $reviews);

    }

    public function standard(){

        return response()->view('signage.standard');
    }

    public function halloween(){

        return response()->view('signage.halloween')->header('X-Frame-Options', 'ALLOW-FROM https://apps.risevision.com');

    }

    public function thanksgiving(){

        return response()->view('signage.thanksgiving');
    }

    public function christmas(){

        return response()->view('signage.christmas');
    }

    public function holidayGiftCard(){

        return response()->view('signage.holiday-giftcard');
    }

    public function newYear(){

        return response()->view('signage.new-year');
    }
}
