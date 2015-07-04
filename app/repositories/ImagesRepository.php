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
    public function show($id)
    {
        return Images::find($id);
    }

}
