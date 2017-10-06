<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerReview;

class CustomerReviewController extends Controller
{
    public function getReviews(){



        $reviews = CustomerReview::latest()->get(['id','customer_name','review','social_media']);

        return response()->json($reviews);

    }
}
