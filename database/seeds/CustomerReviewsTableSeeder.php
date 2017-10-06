<?php

use Illuminate\Database\Seeder;

class CustomerReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\CustomerReview',50)->create();
    }
}
