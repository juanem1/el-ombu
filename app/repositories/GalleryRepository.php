<?php

namespace App\Repositories;

use App\Gallery;

class GalleryRepository
{

    /**
     * Get all products
     * @return mixed
     */
    public function all()
    {
        return Gallery::all();
    }

    /**
     * Show one gallery
     * @param $id Integer
     * @return mixed
     */
    public function find($id)
    {
        return Gallery::find($id);
    }

    /**
     * Persist a new Gallery in the DB
     * @param $data Array
     * @return Boolean
     */
    public function create($data)
    {
        return Gallery::create($data);
    }

}
