<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerReview extends Model
{
    /**
     * return 10 latest reviews
     * @param $query
     * @return mixed
     */
    public function scopeLatest($query){

        return $query->orderBy('id','desc')->limit(3);
    }
}
