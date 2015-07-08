<?php

namespace App\Repositories;

use App\Images;

class ImagesRepository
{

    /**
     * Get all products
     * @return mixed
     */
    public function all()
    {
        return Images::all();
    }

    /**
     * Show one Image
     * @param $id Integer
     * @return mixed
     */
    public function find($id)
    {
        return Images::find($id);
    }

    /**
     * Persist a new image in the DB
     * @param $data Array
     * @return Boolean
     */
    public function create($data)
    {
        return Images::create($data);
    }

}
