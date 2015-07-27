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
    public function findSlug($slug) {
        return Offers::with('products')->whereSlug($slug)->first();
    }

    /**
     * Get all offers
     * @return mixed
     */
    public function all() {
        return Offers::with('products')->get();
    }

    /**
     * Show one offer
     * @param $id Integer
     * @return mixed
     */
    public function find($id)
    {
        return Offers::find($id);
    }

    /**
     * Show one offer by its slug
     * @param $slug String
     * @return Array
     */
    public function view($slug)
    {
        return Offers::whereSlug($slug)->first();
    }

    /**
     * Persist a new object in the DB
     * @param $data Array
     * @return mixed
     */
    public function create($data)
    {
        return Offers::create($data);
    }

}
