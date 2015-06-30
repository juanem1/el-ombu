<?php namespace App\Repositories;

use App\Offers;

class OffersRepository
{

    /**
     * @return mixed
     */
    public function getHomeOffers() {
        return Offers::with('products')->take(8)->get();
    }

    /**
     * Get One product
     * @param $slug
     * @return mixed
     */
    public function find($slug) {
        return Offers::with('products')->whereSlug($slug)->first();
    }

    /**
     * Get all offers
     * @return mixed
     */
    public function all() {
        return Offers::with('products')->get();
    }

}
