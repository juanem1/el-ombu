<?php

namespace App\Repositories;

use App\Complex;
use App\Images;

class ComplexRepository
{

    /**
     * Get all products
     * @return mixed
     */
    public function all()
    {
        return Complex::all();
    }

    /**
     * Show one complex
     * @param $id Integer
     * @return mixed
     */
    public function find($id)
    {
        return Complex::find($id);
    }

    /**
     * Show complex list for the frontend
     * @param $slug String
     * @return Array
     */
    public function view($slug)
    {
        $params['complex'] = Complex::whereSlug($slug)->first();
        $params['images'] = Images::where('gallery_id', $params['complex']->gallery_id)->get()->toArray();
        return $params;
    }

    /**
     * Persist a new complex in the DB
     * @param $data Array
     * @return Boolean
     */
    public function create($data)
    {
        return Complex::create($data);
    }

}
